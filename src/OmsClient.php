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
use Fulfillment\Api\Api;
use Fulfillment\Api\Configuration\ApiConfiguration;
use Fulfillment\OMS\Api\ApiRequestBase;
use Fulfillment\OMS\Api\InventoryApi;
use Fulfillment\OMS\Api\MerchantApi;
use Fulfillment\OMS\Api\OrdersApi;
use Fulfillment\OMS\Api\UsersApi;
use Fulfillment\OMS\Utilities\ArrayUtil;
use League\CLImate\CLImate;
use GuzzleHttp;
date_default_timezone_set('Europe/London');
class OmsClient
{
    public $orders;
    /**
     *
     * @param $config mixed Must be either an absolute string pointing to a directory with a .env file or an array containing configuration information
     * @throws \Exception Thrown if a configuration is not valid
     */
    public function __construct($config)
    {
        $this->climate = new CLImate;
        //defined('STDOUT');
        //parse config
        if (is_string($config) || is_null($config)) {
            if (!is_null($config)) {
                if (!is_dir($config)) {
                    throw new \Exception('The provided directory location does not exist at ' . $config);
                }
                Dotenv::load($config);
                Dotenv::required(['API_ENDPOINT']);
            }
            $username           = getenv('USERNAME') ?: null;
            $password           = getenv('PASSWORD') ?: null;
            $clientId           = getenv('CLIENT_ID') ?: null;
            $clientSecret       = getenv('CLIENT_SECRET') ?: null;
            $accessToken        = getenv('ACCESS_TOKEN') ?: null;
            $endpoint           = getenv('API_ENDPOINT') ?: null;
            $authEndpoint       = getenv('AUTH_ENDPOINT') ?: null;
            $jsonOnly           = getenv('JSON_ONLY') ?: null;
            $storageTokenPrefix = getenv('STORAGE_TOKEN_PREFIX') ?: null;
        } else {
            if (is_array($config)) {
                $username           = ArrayUtil::get($config['username']);
                $password           = ArrayUtil::get($config['password']);
                $clientId           = ArrayUtil::get($config['clientId']);
                $clientSecret       = ArrayUtil::get($config['clientSecret']);
                $accessToken        = ArrayUtil::get($config['accessToken']);
                $endpoint           = ArrayUtil::get($config['endpoint']);
                $authEndpoint       = ArrayUtil::get($config['authEndpoint']);
                $storageTokenPrefix = ArrayUtil::get($config['storageTokenPrefix']);
                $jsonOnly           = ArrayUtil::get($config['jsonOnly'], false);
            } else {
                throw new \InvalidArgumentException('A configuration must be provided');
            }
        }
        $apiConfig = new ApiConfiguration([
            'username'           => $username,
            'password'           => $password,
            'clientId'           => $clientId,
            'clientSecret'       => $clientSecret,
            'accessToken'        => $accessToken,
            'endpoint'           => $endpoint,
            'authEndpoint'       => $authEndpoint,
            'storageTokenPrefix' => $storageTokenPrefix,
            'scope'              => 'oms',
        ]);
        $apiClient = new Api($apiConfig);
        //instantiate api
        $this->orders    = new OrdersApi($apiClient);
        $this->inventory = new InventoryApi($apiClient);
        $this->users     = new UsersApi($apiClient);
        $this->merchants = new MerchantApi($apiClient);
        $this->skus      = new SkusApi($apiClient);
        $this->audits    = new AuditsApi($apiClient);
    }
}