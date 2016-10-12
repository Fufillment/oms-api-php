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
use Fulfillment\OMS\Api\AuditsApi;
use Fulfillment\OMS\Api\InventoryApi;
use Fulfillment\OMS\Api\MerchantApi;
use Fulfillment\OMS\Api\SkusApi;
use Fulfillment\OMS\Api\OrdersApi;
use Fulfillment\OMS\Api\UsersApi;
use Fulfillment\OMS\Utilities\ArrayUtil;
use League\CLImate\CLImate;
use GuzzleHttp;
use League\Container\Container;

date_default_timezone_set('Europe/London');
class OmsClient
{
	/** @var Api */
    protected $apiClient;

	/** @var Container */
	protected $container;

	/** @var OrdersApi */
	public $orders;

	/** @var InventoryApi */
	public $inventory;

	/** @var UsersApi */
	public $users;

	/** @var MerchantApi */
	public $merchants;

	/** @var SkusApi */
	public $skus;

	/** @var AuditsApi */
	public $audits;

	protected $jsonOnly;

	/**
	 *
	 * @param      $config mixed Must be either an absolute string pointing to a directory with a .env file or an array containing configuration information
	 * @param null $providedClasses
	 *
	 * @throws \Exception Thrown if a configuration is not valid
	 */
    public function __construct($config, $providedClasses = null)
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
            $this->jsonOnly           = getenv('JSON_ONLY') ?: null;
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
                $this->jsonOnly           = ArrayUtil::get($config['jsonOnly'], false);
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

	    // Dependency injection
	    $factory = new ContainerFactory;
	    $this->container = $factory->createContainer($providedClasses);

        $this->apiClient = new Api($apiConfig);

        //instantiate api endpoints
        $this->setEndPoints();
    }

	/**
	 * Registers a concrete class against an interface
	 *
	 * @param string $interfaceFqn FQN for interface to register
	 * @param string $concreteFqn  FQN for concrete class to use as implementation
	 *
	 * @throws \InvalidArgumentException
	 */
	public function registerConcreteClass($interfaceFqn, $concreteFqn) {

		ContainerFactory::checkImplements($concreteFqn, $interfaceFqn);
		$this->container->add($interfaceFqn, $concreteFqn);
		$this->setEndPoints();
	}

	protected function setEndPoints() {
		$this->orders    = new OrdersApi($this->container, $this->apiClient, $this->jsonOnly);
		$this->inventory = new InventoryApi($this->container, $this->apiClient, $this->jsonOnly);
		$this->users     = new UsersApi($this->container, $this->apiClient, $this->jsonOnly);
		$this->merchants = new MerchantApi($this->container, $this->apiClient, $this->jsonOnly);
		$this->skus      = new SkusApi($this->container, $this->apiClient, $this->jsonOnly);
		$this->audits    = new AuditsApi($this->container, $this->apiClient, $this->jsonOnly);
	}
}