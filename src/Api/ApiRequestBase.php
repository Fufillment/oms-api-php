<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 3:33 PM
 */

namespace Fulfillment\OMS\Api;

use Fulfillment\Api\Api;
use Fulfillment\OMS\Exceptions\UnauthorizedMerchantException;
use GuzzleHttp;
use League\CLImate\CLImate;
use League\Container\Container;

class ApiRequestBase
{
	/** @var Api */
    protected $apiClient;

	/** @var \JsonMapper */
    protected $jsonMapper;
    protected $jsonOnly;

	/** @var Container */
	protected $container;

	/**
	 * @param Container $container
	 * @param Api       $apiClient
	 * @param bool      $jsonOnly
	 * @param bool      $validateRequests Default behavior for validating POST and PUT requests.  Will validate objects before making the request
	 */
    public function __construct(Container $container, Api $apiClient, $jsonOnly = false, $validateRequests = true)
    {
	    $this->container        = $container;
	    $this->jsonOnly         = $jsonOnly;
	    $this->apiClient        = $apiClient;
	    $this->jsonMapper       = new \JsonMapper();
	    $this->validateRequests = $validateRequests;
    }
}