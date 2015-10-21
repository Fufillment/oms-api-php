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

class ApiRequestBase
{
    protected $apiClient;
    protected $jsonMapper;
    protected $jsonOnly;

    /**
     * @param Api $apiClient
     * @param bool $jsonOnly
     * @param bool $validateRequests Default behavior for validating POST and PUT requests.  Will validate objects before making the request
     */
    public function __construct(Api $apiClient, $jsonOnly = false, $validateRequests = true)
    {
        $this->jsonOnly         = $jsonOnly;
        $this->apiClient        = $apiClient;
        $this->jsonMapper       = new \JsonMapper();
        $this->validateRequests = $validateRequests;
    }
}