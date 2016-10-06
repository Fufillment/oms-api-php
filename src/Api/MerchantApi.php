<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/4/16
 * Time: 4:53 PM
 */

namespace Fulfillment\OMS\Api;

use Fulfillment\OMS\Models\Response\Contracts\MerchantBalanceAudit;
use Fulfillment\OMS\Models\Response\Contracts\MerchantShippingMethod;
use Fulfillment\OMS\Models\Response\Contracts\OrderAccountingAudit;
use Fulfillment\OMS\Models\Response\Contracts\Product;
use Fulfillment\OMS\Models\Response\Contracts\Sku;
use Fulfillment\OMS\Models\Response\Inventory;
use Fulfillment\OMS\Models\Response\Merchant;
use Fulfillment\OMS\Models\Response\MerchantFees;
use phpDocumentor\Reflection\Types\Object_;

class MerchantApi extends ApiRequestBase {

	/**
	 * Return an array of Order objects
	 *
	 * Will return only Orders for the merchant authenticating the request
	 *
	 * @param null $queryString
	 * @param      ids   Merchant IDs
	 * @param      names Merchant names
	 *
	 * @return mixed
	 * @throws \Exception
	 */
	public function getMerchants($ids, $names, $queryString = null)
	{

		if (is_null($queryString))
		{
			$queryString = [];
		}
		$queryString['ids']   = $ids;
		$queryString['names'] = $names;

		$merchantJson = $this->apiClient->get('merchants', $queryString);

		if ($this->jsonOnly)
		{
			$merchants = $merchantJson;
		}
		else
		{
			$merchants = $this->jsonMapper->mapArray($merchantJson, [], 'Fulfillment\OMS\Models\Response\Merchant');
		}

		return $merchants;
	}

	/**
	 * Return the Merchant with the specified Id
	 *
	 * @param $merchantId
	 *
	 * @return object
	 * @throws \Exception
	 * @throws \JsonMapper_Exception
	 */
	public function getMerchantById($merchantId, $classToMapTo = Merchant::class)
	{
		$merchantJson = $this->apiClient->get('merchants/' . $merchantId);

		if ($this->jsonOnly)
		{
			$merchant = $merchantJson;
		}
		else
		{
			$merchant = $this->jsonMapper->map($merchantJson, new $classToMapTo());
		}

		return $merchant;
	}

	/**
	 * Get balance audit data for a merchant
	 *
	 * @param $merchantId
	 *
	 * @return mixed|object
	 * @throws \Exception
	 * @throws \JsonMapper_Exception
	 */
	public function getMerchantAuditsById($merchantId, $page, $classToMapTo = MerchantBalanceAudit::class)
	{
		$merchantAuditJson = $this->apiClient->get('merchants/' . $merchantId . '/audits' . '/balance', ['page' => $page]);

		if ($this->jsonOnly)
		{
			$returnMerchantBalanceAudit = $merchantAuditJson;
		}
		else
		{
			$returnMerchantBalanceAudit = $this->jsonMapper->map($merchantAuditJson, new $classToMapTo());
		}

		return $returnMerchantBalanceAudit;

	}

	/**
	 * Get balance audit data for a merchant
	 *
	 * @param $merchantId
	 *
	 * @return mixed|object
	 * @throws \Exception
	 * @throws \JsonMapper_Exception
	 */
	public function getOrderAccountingAuditById($merchantId, $page, $classToMapTo = OrderAccountingAudit::class)
	{
		$merchantAuditJson = $this->apiClient->get('merchants/' . $merchantId . '/audits' . '/orders', ['page' => $page]);

		if ($this->jsonOnly)
		{
			$returnMerchantOrderAudit = $merchantAuditJson;
		}
		else
		{
			$returnMerchantOrderAudit = $this->jsonMapper->map($merchantAuditJson, new $classToMapTo());
		}

		return $returnMerchantOrderAudit;

	}

	/**
	 * Return all inventory for a merchant
	 *
	 * @param $merchantId
	 *
	 * @return object | Merchant
	 * @throws \Exception
	 * @throws \JsonMapper_Exception
	 */
	public function getInventoryByMerchantId($merchantId, $classToMapTo = Merchant::class)
	{
		$merchantJson = $this->apiClient->get('merchants/' . $merchantId . '/inventory');

		if ($this->jsonOnly)
		{
			$inventory = $merchantJson;
		}
		else
		{
			$inventory = $this->jsonMapper->map($merchantJson, new $classToMapTo());
		}

		return $inventory;
	}

	/**
	 * Return all shipping methods for a merchant
	 *
	 * @param $merchantId
	 *
	 * @return object | MerchantShippingMethod
	 * @throws \Exception
	 * @throws \JsonMapper_Exception
	 */
	public function getShippingMethodsById($merchantId, $classToMapTo = MerchantShippingMethod::class)
	{
		$merchantShippingMethodJson = $this->apiClient->get('merchants/' . $merchantId . '/methods');

		if ($this->jsonOnly)
		{
			$methods = $merchantShippingMethodJson;
		}
		else
		{
			$methods = $this->jsonMapper->map($merchantShippingMethodJson, new $classToMapTo());
		}

		return $methods;
	}

	/**
	 * Return all products for a merchant
	 *
	 * @param $merchantId
	 *
	 * @return object | Product
	 * @throws \Exception
	 * @throws \JsonMapper_Exception
	 */
	public function getProductsById($merchantId, $classToMapTo = Product::class)
	{
		$merchantJson = $this->apiClient->get('merchants/' . $merchantId . '/products');

		if ($this->jsonOnly)
		{
			$products = $merchantJson;
		}
		else
		{
			$products = $this->jsonMapper->map($merchantJson, new $classToMapTo());
		}

		return $products;
	}

	/**
	 * Return all skus for a merchant
	 *
	 * @param $merchantId
	 *
	 * @return object | Sku
	 * @throws \Exception
	 * @throws \JsonMapper_Exception
	 */
	public function getSkusById($merchantId, $classToMapTo = Sku::class)
	{
		$merchantJson = $this->apiClient->get('merchants/' . $merchantId . '/skus');

		if ($this->jsonOnly)
		{
			$skus = $merchantJson;
		}
		else
		{
			$skus = $this->jsonMapper->map($merchantJson, new $classToMapTo());
		}

		return $skus;
	}

	/**
	 * Return all users for a merchant
	 *
	 * @param $merchantId
	 *
	 * @return object | Sku
	 * @throws \Exception
	 * @throws \JsonMapper_Exception
	 */
	public function getUsersById($merchantId, $classToMapTo = User::class)
	{
		$merchantJson = $this->apiClient->get('merchants/' . $merchantId . '/users');

		if ($this->jsonOnly)
		{
			$skus = $merchantJson;
		}
		else
		{
			$skus = $this->jsonMapper->map($merchantJson, new $classToMapTo());
		}

		return $skus;
	}
}