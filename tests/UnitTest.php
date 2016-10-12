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
			'id' => '9595088'
		);
		$orders = $this->oms->orders->getOrders('2016-10-3', '2016-10-4', $queryString);
	}
	/**
	 * Orders getOrder
	 */
	public function testGetOrder()
	{
		$order = $this->oms->orders->getOrder(9595088);
	}

	/**
	 * Orders getStatusHistory
	 */
	public function testGetStatusHistory()
	{
		$order = $this->oms->orders->getStatusHistory(9595088);
	}

	/**
	 * Orders getTracking
	 */
	public function testGetTracking()
	{
		$this->markTestSkipped( 'PHPUnit will skip this test method' );

		$order = $this->oms->orders->getTracking(9645831);
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
			'merchantsIds' => '50001',
			'limit' => '5'
		);
		$users = $this->oms->users->getUsers($queryString);
	}

	/**
	 * Users getUser
	 */
	public function testGetUser()
	{
		$id = 'me';
		$users = $this->oms->users->getUser($id);
	}

	/**
	 * Inventory listInventory
	 */
	public function testListInventory()
	{
		$queryString = array(
			'ids' => '13192',
			'limit'=> '5',
			'page'=> '1'
		);
		$audit = $this->oms->inventory->listInventory($queryString);
	}

	/**
	 * Inventory getInventory
	 */
	public function testGetInventory()
	{
		$inventoryId = '16096';
		$audit = $this->oms->inventory->getInventory($inventoryId);
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
		$ids = '16096';
		$queryString = array(
			'limit' => 5,
			'page' => 1
		);
		$audit = $this->oms->merchants->getMerchants($ids, $queryString);
	}
	/**
	 * Merchants getMerchantsById
	 */
	public function testGetMerchantById()
	{
		$id = '50001';

		$audit = $this->oms->merchants->getMerchantById($id);
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
		$id = '50001';

		$audit = $this->oms->merchants->getInventoryByMerchantId($id);
	}

	/**
	 * Merchants getShippingMethodsById
	 */
	public function testGetShippingMethodsById()
	{
		$id = '50001';

		$audit = $this->oms->merchants->getShippingMethodsById($id);
	}

	/**
	 * Merchants getProductById
	 */
	public function testGetProductsById()
	{
		$id = '50001';

		$audit = $this->oms->merchants->getProductsById($id);
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
		$id = '50001';

		$audit = $this->oms->merchants->getUsersById($id);
	}

	/**
	 * Skus getSkus
	 */
	public function testGetSkus()
	{
		$skuId       = '120569';
		$queryString = [
			'limit' => '1',
			'page'  => '1',
		];

		$audit = $this->oms->skus->getSkus($skuId, $queryString);
	}

	/**
	 * Skus getSkuById
	 */
	public function testGetSkuById()
	{
		$skuId = '120569';


		$audit = $this->oms->skus->getSkuById($skuId);
	}

	/**
	 * Skus getSkuById
	 */
	public function testGetSkuProductsBySkuId()
	{
		$skuId = '120569';


		$audit = $this->oms->skus->getSkuProductsBySkuId($skuId);
	}

}