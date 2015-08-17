<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 2:59 PM
 */

namespace Fulfillment\OMS;
require __DIR__ . '/../vendor/autoload.php';


use Dotenv;
use Fulfillment\OMS\Api\ApiRequestBase;
use Fulfillment\OMS\Api\InventoryApi;
use Fulfillment\OMS\Api\OrdersApi;
use Fulfillment\OMS\Utilities\ArrayUtil;
use League\CLImate\CLImate;
use GuzzleHttp;

date_default_timezone_set('Europe/London');

class OMS
{
    protected $apiKey;
    protected $clientId;
    protected $clientSecret;
    protected $accessToken;
    protected $endPoint;
    protected $config;

    protected $guzzle;
    protected $climate;

    public $orders;

    /**
     *
     * @param $config mixed Must be either an absolute string pointing to a directory with a .env file or an array containing configuration information
     * @throws \Exception Thrown if a configuration is not valid
     */
    public function __construct($config)
    {
        $this->guzzle  = new GuzzleHttp\Client();
        $this->climate = new CLImate;
        //defined('STDOUT');

        //parse config
        if (is_string($config) || is_null($config)) {
            if (!is_null($config)) {
                if (!is_dir($config)) {
                    throw new \Exception('The provided directory location does not exist at ' . $config);
                }
                Dotenv::load($config);
                Dotenv::required(['OMS_ENDPOINT']);

            }
            $this->apiKey       = getenv('API_KEY');
            $this->clientId     = getenv('CLIENT_ID');
            $this->clientSecret = getenv('CLIENT_SECRET');
            $this->accessToken  = getenv('ACCESS_TOKEN');
            $this->endPoint     = getenv('OMS_ENDPOINT');
            $this->jsonOnly     = getenv('JSON_ONLY');
        } else if (is_array($config)) {
            $this->apiKey       = ArrayUtil::get($config['API_KEY']);
            $this->clientId     = ArrayUtil::get($config['CLIENT_ID']);
            $this->clientSecret = ArrayUtil::get($config['CLIENT_SECRET']);
            $this->accessToken  = ArrayUtil::get($config['ACCESS_TOKEN']);
            $this->endPoint     = ArrayUtil::get($config['OMS_ENDPOINT']);
            $this->jsonOnly     = ArrayUtil::get($config['JSON_ONLY'], false);
        } else {
            throw new \InvalidArgumentException('A configuration must be provided');
        }

        if (is_null($this->accessToken) && (is_null($this->clientId) || is_null($this->clientSecret) || is_null($this->apiKey))) {
            throw new \InvalidArgumentException('No access token provided, client Id, client secret, and api key must be provided');
        }
        if (is_null($this->endPoint)) {
            throw new \InvalidArgumentException('Must provide an endpoint');
        }

        $tokenCb    = function ($token) {
            $this->accessToken = $token;
        };
        $getTokenCb = function () {
            return $this->accessToken;
        };

        if (is_null($this->accessToken) || $this->accessToken === false) {
            //if they don't have an access token we need to try to get one
            $base = new ApiRequestBase($this->guzzle, $this->bundleConfig(), $this->climate, $tokenCb, $getTokenCb);
            $base->requestAccessToken();
        }

        //instantiate api
        $this->orders = new OrdersApi($this->guzzle, $this->bundleConfig(), $this->climate, $tokenCb, $getTokenCb);
        $this->inventory = new InventoryApi($this->guzzle, $this->bundleConfig(), $this->climate, $tokenCb, $getTokenCb);
    }

    private function bundleConfig()
    {
        return [
            'apiKey' => $this->apiKey,
            'clientId' => $this->clientId,
            'clientSecret' => $this->clientSecret,
            'accessToken' => $this->accessToken,
            'endPoint' => $this->endPoint,
            'jsonOnly' => $this->jsonOnly
        ];
    }
}