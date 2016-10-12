<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/4/16
 * Time: 4:53 PM
 */

namespace Fulfillment\OMS\Api;

use Fulfillment\OMS\Models\Response\Contracts\User;
use Fulfillment\OMS\Models\Response\Contracts\Inventory;
use Fulfillment\OMS\Models\Response\Contracts\Merchant;
use Fulfillment\OMS\Models\Response\Contracts\MerchantBalanceAudit;
use Fulfillment\OMS\Models\Response\Contracts\MerchantShippingMethod;
use Fulfillment\OMS\Models\Response\Contracts\OrderAccountingAudit;
use Fulfillment\OMS\Models\Response\Contracts\Product;
use Fulfillment\OMS\Models\Response\Contracts\Sku;

class MerchantApi extends ApiRequestBase {

	/**
	 * Return an array of Order objects
	 *
	 * Will return only Orders for the merchant authenticating the request
	 *
	 * @param null $queryString
	 * @param      $ids   Merchant IDs
	 * @param      $names Merchant names
	 *
	 * @return mixed
	 * @throws \Exception
	 */
	public function getMerchants($ids, $queryString = null)
	{

		if (is_null($queryString))
		{
			$queryString = [];
		}
		$queryString['ids']   = $ids;

		$merchantJson = $this->apiClient->get('merchants', $queryString);

		if ($this->jsonOnly)
		{
			$merchants = $merchantJson;
		}
		else
		{
			$merchants = $this->jsonMapper->mapArray($merchantJson->data, [], get_class($this->container->get(Merchant::class)));
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
	public function getMerchantById($merchantId)
	{
		$merchantJson = $this->apiClient->get('merchants/' . $merchantId);

		if ($this->jsonOnly)
		{
			$merchant = $merchantJson;
		}
		else
		{
			$merchant = $this->jsonMapper->map($merchantJson, $this->container->get(Merchant::class));
		}

		return $merchant;
	}

	/**
	 * Get balance audit data for a merchant
	 *
	 * @param $merchantId
	 *
	 * @param $page
	 *
	 * @return mixed|object
	 */
	public function getMerchantAuditsById($merchantId, $page)
	{
		$merchantAuditJson = $this->apiClient->get('merchants/' . $merchantId . '/audits' . '/balance', ['page' => $page]);

		if ($this->jsonOnly)
		{
			$returnMerchantBalanceAudit = $merchantAuditJson;
		}
		else
		{
			$returnMerchantBalanceAudit = $this->jsonMapper->mapArray($merchantAuditJson->data, [], get_class($this->container->get(MerchantBalanceAudit::class)));
		}

		return $returnMerchantBalanceAudit;

	}

	/**
	 * Get balance audit data for a merchant
	 *
	 * @param $merchantId
	 *
	 * @param $page
	 *
	 * @return mixed|OrderAccountingAudit[]
	 */
	public function getOrderAccountingAuditById($merchantId, $page)
	{
		$merchantAuditJson = $this->apiClient->get('merchants/' . $merchantId . '/audits' . '/orders', ['page' => $page]);

		if ($this->jsonOnly)
		{
			$returnMerchantOrderAudit = $merchantAuditJson;
		}
		else
		{
			$returnMerchantOrderAudit = $this->jsonMapper->mapArray($merchantAuditJson->data, [], get_class($this->container->get(OrderAccountingAudit::class)));
		}

		return $returnMerchantOrderAudit;

	}

	/**
	 * Return all inventory for a merchant
	 *
	 * @param $merchantId
	 *
	 * @return array | Inventory[]
	 * @throws \Exception
	 * @throws \JsonMapper_Exception
	 */
	public function getInventoryByMerchantId($merchantId)
	{
		$inventoryJson = $this->apiClient->get('merchants/' . $merchantId . '/inventory');

		if ($this->jsonOnly)
		{
			$inventory = $inventoryJson;
		}
		else
		{
			$inventory = $this->jsonMapper->mapArray($inventoryJson, [], get_class($this->container->get(Inventory::class)));
		}

		return $inventory;
	}

	/**
	 * Return all shipping methods for a merchant
	 *
	 * @param $merchantId
	 *
	 * @return array | MerchantShippingMethod[]
	 * @throws \Exception
	 * @throws \JsonMapper_Exception
	 */
	public function getShippingMethodsById($merchantId)
	{
		$merchantShippingMethodJson = $this->apiClient->get('merchants/' . $merchantId . '/methods');

		if ($this->jsonOnly)
		{
			$methods = $merchantShippingMethodJson;
		}
		else
		{
			$methods = $this->jsonMapper->mapArray($merchantShippingMethodJson, [], get_class($this->container->get(MerchantShippingMethod::class)));
		}

		return $methods;
	}

	/**
	 * Return all products for a merchant
	 *
	 * @param $merchantId
	 *
	 * @return array | Product[]
	 * @throws \Exception
	 * @throws \JsonMapper_Exception
	 */
	public function getProductsById($merchantId)
	{
		$merchantJson = $this->apiClient->get('merchants/' . $merchantId . '/products');

		if ($this->jsonOnly)
		{
			$products = $merchantJson;
		}
		else
		{
			$products = $this->jsonMapper->mapArray($merchantJson, [], get_class($this->container->get(Product::class)));
		}

		return $products;
	}

	/**
	 * Return all skus for a merchant
	 *
	 * @param $merchantId
	 *
	 * @return object | Sku[]
	 * @throws \Exception
	 * @throws \JsonMapper_Exception
	 */
	public function getSkusById($merchantId)
	{
		$merchantJson = $this->apiClient->get('merchants/' . $merchantId . '/skus');

		if ($this->jsonOnly)
		{
			$skus = $merchantJson;
		}
		else
		{
			$skus = $this->jsonMapper->mapArray($merchantJson, get_class($this->container->get(Sku::class)));
		}

		return $skus;
	}

	/**
	 * Return all users for a merchant
	 *
	 * @param $merchantId
	 *
	 * @return object | User[]
	 * @throws \Exception
	 * @throws \JsonMapper_Exception
	 */
	public function getUsersById($merchantId)
	{
		$merchantJson = $this->apiClient->get('merchants/' . $merchantId . '/users');

		if ($this->jsonOnly)
		{
			$users = $merchantJson;
		}
		else
		{
			$users = $this->jsonMapper->mapArray($merchantJson, [], get_class($this->container->get(User::class)));
		}

		return $users;
	}
}