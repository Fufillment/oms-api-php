<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/6/16
 * Time: 9:29 AM
 */

namespace Fulfillment\OMS\Tests;
use Fulfillment\OMS\OmsClient;


class UnitTest extends \PHPUnit_Framework_TestCase{
	/**
	 * @var
	 */
	public $oms;


	/**
	 *
	 */
	public function setUp()
	{
		$this->oms = new OmsClient(__DIR__.'/../');
	}

	/**
	 * Orders getOrders
	 */
	public function testGetOrders()
	{
		$queryString = array(
			'limit' => '5',
		);
		$orders = $this->oms->orders->getOrders('2016-10-3', '2016-10-4', $queryString);
	}
	/**
	 * Orders getOrder
	 */
	public function testGetOrder()
	{
		$queryString = [
			'limit' => '5',
		];
		$orders      = $this->oms->orders->getOrders('2016-10-3', '2016-10-4', $queryString);
		$orderId     = $orders[0]->id;
		$order       = $this->oms->orders->getOrder($orderId);
	}

	/**
	 * Orders getStatusHistory
	 */
	public function testGetStatusHistory()
	{
		$queryString = [
			'limit' => '5',
		];
		$orders      = $this->oms->orders->getOrders('2016-10-3', '2016-10-4', $queryString);
		$orderId     = $orders[0]->id;
		$order       = $this->oms->orders->getStatusHistory($orderId);
	}

	/**
	 * Orders getTracking
	 */
	public function testGetTracking()
	{
		$this->markTestSkipped( 'PHPUnit will skip this test method' );

		$queryString = [
			'limit' => '5',
		];
		$orders      = $this->oms->orders->getOrders('2016-10-3', '2016-10-4', $queryString);
		$orderId     = $orders[0]->id;

		$order = $this->oms->orders->getTracking($orderId);
	}

	/**
	 * Audits getMerchants
	 */
	public function testAuditGetMerchants()
	{
		$this->markTestSkipped( 'PHPUnit will skip this test method' );
		$querystring = array(
			'ids' => '50001'
		);
		$audit = $this->oms->audits->getMerchants($querystring);
	}

	/**
	 * Users getUsers
	 */
	public function testGetUsers()
	{
		$queryString = array(
			'limit' => '5'
		);
		$users = $this->oms->users->getUsers($queryString);
	}

	/**
	 * Users getUser
	 */
	public function testGetUser()
	{
		$queryString = [
			'limit' => '5',
		];
		$users       = $this->oms->users->getUsers($queryString);
		$userId      = $users[0]->userId;

		$user = $this->oms->users->getUser($userId);
	}

	/**
	 * Inventory listInventory
	 */
	public function testListInventory()
	{
		$queryString = array(
			'limit'=> '5',
		);
		$inventoryList = $this->oms->inventory->listInventory($queryString);
	}

	/**
	 * Inventory getInventory
	 */
	public function testGetInventory()
	{
		$queryString = array(
			'limit' => '5',
		);
		$inventoryList = $this->oms->inventory->listInventory($queryString);
		$inventoryId = $inventoryList[0]->id;

		$inventory = $this->oms->inventory->getInventory($inventoryId);
	}

	/**
	 * Inventory getInventoryAuditsById
	 */
	public function testGetInventoryAuditsById()
	{
		$this->markTestSkipped( 'InventoryAudit model still needs to be implemented.' );

		$inventoryId = '16096';
		$page = 1;
		$limit = 5;

		$audit = $this->oms->inventory->getInventoryAuditsById($inventoryId, $page, $limit);
	}

	/**
	 * Merchants getMerchants
	 */
	public function testGetMerchants()
	{
		$queryString = array(
			'limit' => 5,
		);
		$merchants   = $this->oms->merchants->getMerchants($queryString);
	}

	/**
	 * Merchants getMerchantsById
	 */
	public function testGetMerchantById()
	{
		$queryString = array(
			'limit' => 5,
		);
		$merchants   = $this->oms->merchants->getMerchants($queryString);
		$merchantId  = $merchants[0]->id;

		$merchant = $this->oms->merchants->getMerchantById($merchantId);
	}

	/**
	 * Merchants getMerchantAuditsById
	 */
	public function testGetMerchantAuditsById()
	{
		$this->markTestSkipped( 'There is not a recordedOn query endpoint yet.' );

		$id = '50001';
		$page = 1;

		$audit = $this->oms->merchants->getMerchantAuditsById($id, $page);
	}

	/**
	 * Merchants getOrderAccountingAuditById
	 */
	public function testGetOrderAccountingAuditById()
	{
		$this->markTestSkipped( 'There is not a recordedOn query endpoint yet.' );

		$id = '50001';
		$page = 1;

		$audit = $this->oms->merchants->getOrderAccountingAuditById($id, $page);
	}

	/**
	 * Merchants getInventoryByMerchantId
	 */
	public function testGetInventoryByMerchantId()
	{

		$queryString = array(
			'limit' => 5,
		);
		$merchants   = $this->oms->merchants->getMerchants($queryString);
		$merchantId  = $merchants[0]->id;

		$inventory = $this->oms->merchants->getInventoryByMerchantId($merchantId);
	}

	/**
	 * Merchants getShippingMethodsById
	 */
	public function testGetShippingMethodsById()
	{
		$queryString = array(
			'limit' => 5,
		);
		$merchants   = $this->oms->merchants->getMerchants($queryString);
		$merchantId  = $merchants[0]->id;

		$audit = $this->oms->merchants->getShippingMethodsById($merchantId);
	}

	/**
	 * Merchants getProductById
	 */
	public function testGetProductsById()
	{
		$queryString = array(
			'limit' => 5,
		);
		$merchants   = $this->oms->merchants->getMerchants($queryString);
		$merchantId  = $merchants[0]->id;

		$audit = $this->oms->merchants->getProductsById($merchantId);
	}

	/**
	 * Merchants getSkusById
	 */
	public function testGetSkusById()
	{
		$this->markTestSkipped('The api needs to update its response body.');

		$id = '50001';

		$audit = $this->oms->merchants->getSkusById($id);
	}

	/**
	 * Merchants getUsersById
	 */
	public function testGetUsersById()
	{
		$queryString = array(
			'limit' => 5,
		);
		$merchants   = $this->oms->merchants->getMerchants($queryString);
		$merchantId  = $merchants[0]->id;

		$audit = $this->oms->merchants->getUsersById($merchantId);
	}

	/**
	 * Skus getSkus
	 */
	public function testGetSkus()
	{
		$queryString = [
			'limit' => '1',
		];

		$skus = $this->oms->skus->getSkus($queryString);
	}

	/**
	 * Skus getSkuById
	 */
	public function testGetSkuById()
	{
		$queryString = [
			'limit' => '1',
		];

		$skus = $this->oms->skus->getSkus($queryString);

		$skuId = $skus[0]->id;

		$audit = $this->oms->skus->getSkuById($skuId);
	}

	/**
	 * Skus getSkuById
	 */
	public function testGetSkuProductsBySkuId()
	{
		$queryString = [
			'limit' => '1',
		];

		$skus = $this->oms->skus->getSkus($queryString);

		$skuId = $skus[0]->id;

		$audit = $this->oms->skus->getSkuProductsBySkuId($skuId);
	}

}