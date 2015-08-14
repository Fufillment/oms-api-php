<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 3:33 PM
 */

namespace Fulfillment\OMS\Api;

use Fulfillment\OMS\Exceptions\UnauthorizedMerchantException;
use GuzzleHttp;
use League\CLImate\CLImate;

class ApiRequestBase
{
    protected $guzzle;
    protected $config;
    protected $climate;
    protected $tokenSetCb;
    protected $tokenGetCb;
    protected $jsonMapper;

    /**
     * @param GuzzleHttp\Client $guzzle
     * @param $config array
     * @param CLImate $climate
     * @param bool $validateRequests Default behavior for validating POST and PUT requests.  Will validate objects before making the request
     * @param \Closure $setCb
     * @param \Closure $getCb
     */
    public function __construct(GuzzleHttp\Client $guzzle, $config, CLImate $climate, \Closure $setCb, \Closure $getCb, $validateRequests = true)
    {
        $this->guzzle     = $guzzle;
        $this->config     = $config;
        $this->climate    = $climate;
        $this->tokenSetCb = $setCb;
        $this->tokenGetCb = $getCb;
        $this->jsonMapper = new \JsonMapper();
        $this->validateRequests = $validateRequests;
    }

    function requestAccessToken()
    {

        $this->climate->info('Requesting new access token...');

        try {
            $accessTokenResponse = $this->guzzle->post($this->config['endPoint'] . '/oauth/access_token', [
                'multipart' => [
                    [
                        'name' => 'client_id',
                        'contents' => $this->config['clientId']
                    ],
                    [
                        'name' => 'client_secret',
                        'contents' => $this->config['clientSecret']
                    ],
                    [
                        'name' => 'apiKey',
                        'contents' => $this->config['apiKey']
                    ],
                    [
                        'name' => 'grant_type',
                        'contents' => 'apiKey'
                    ]
                ]
            ],
                [
                    'http_errors' => false]
            );
        } catch (GuzzleHttp\Exception\RequestException $e) {
            $this->climate->error('Requesting access token has failed.');

            $this->printError($e);

            throw new UnauthorizedMerchantException();
        }
        $accessTokenJson = json_decode($accessTokenResponse->getBody());

        $this->climate->info('Got new access token!');

        call_user_func($this->tokenSetCb, [$accessTokenJson->access_token]);
        $this->config['accessToken'] = $accessTokenJson->access_token;
    }

    /**
     * Make a request to the API using Guzzle
     *
     * @param $method string The HTTP VERB to use for this request
     * @param $url string The relative URL after the hostname
     * @param null $apiRequest array The contents of the api body
     * @param null $queryString array Data to add as a querystring to the url
     * @param bool|true $firstTry Indicates whether this is the first attempt to make this request
     * @return mixed
     * @throws UnauthorizedMerchantException
     * @throws \Exception
     */
    function makeRequest($method, $url, $apiRequest = null, $queryString = null, $firstTry = true)
    {
        $urlEndPoint = $this->config['endPoint'] . '/' . $url;

        //we want to see the url being called
        $this->climate->out('URL: ' . $urlEndPoint);

        $data = [
            'headers' => [
                'Authorization' => 'Bearer ' . call_user_func($this->tokenGetCb)//$this->config['accessToken']
            ],
            'json' => $apiRequest,
            'query' => $queryString
        ];


        try {
            switch ($method) {
                case 'post':
                    $response = $this->guzzle->post($urlEndPoint, $data);
                    break;
                case 'put':
                    $response = $this->guzzle->put($urlEndPoint, $data);
                    break;
                case 'delete':
                    $response = $this->guzzle->delete($urlEndPoint, $data);
                    break;
                case 'get':
                    $response = $this->guzzle->get($urlEndPoint, $data);
                    break;
                default:
                    throw new \Exception('Missing request method!');

            }

            $this->climate->info('Request successful.');

            return json_decode($response->getBody());

        } catch (GuzzleHttp\Exception\RequestException $e) {
            $this->climate->error('Request failed with status code ' . $e->getResponse()->getStatusCode());

            if ($e->getResponse()->getStatusCode() == 401) {
                if ($firstTry) {
                    $this->climate->info('Possibly expired token, trying to refresh token...');
                    $this->requestAccessToken();
                    $this->climate->info('Retrying request...');
                    $this->makeRequest($method, $url, $apiRequest, $queryString, $firstTry = false);
                } else {
                    $this->printError($e);
                    throw $e;
                }
            } else {
                $this->printError($e);
                throw $e;
            }
        }
    }

    private function printError(GuzzleHttp\Exception\RequestException $requestException)
    {

        $error = $error = json_decode($requestException->getResponse()->getBody());

        if (!is_null($error) && isset($error->error)) {
            $this->climate->error('<bold>Error: </bold>' . $error->error);
            $this->climate->error('<bold>Description: </bold> ' . $error->error_description);
        } else if (!is_null($error) && isset($error->message)) {
            $this->climate->error('<bold>Error: </bold>' . $error->message);
            if (isset($error->validationErrors)) {
                foreach ($error->validationErrors as $prop => $message) {
                    $this->climate->error('-- ' . $prop . ': ' . $message);
                }
            }
        } else {
            $this->climate->error('<bold>Error: </bold>' . $requestException->getMessage());
        }
    }
}