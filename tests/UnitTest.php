<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/6/16
 * Time: 9:29 AM
 */

namespace Fulfillment\OMS\Tests;
use Fulfillment\OMS\Models\Request\User;
use Fulfillment\OMS\OmsClient;

//use PHPUnit_Framework_TestCase;
//require __DIR__.'/../vendor/autoload.php';


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
	 *
	 */
	public function testGetOrders()
	{
//		$this->markTestSkipped( 'PHPUnit will skip this test method' );

		$queryString = array(
			'id' => '9595088'
		);
		$orders = $this->oms->orders->getOrders('2016-10-3', '2016-10-4', $queryString);
	}
	/**
	 *
	 */
	public function testGetOrder()
	{
		$order = $this->oms->orders->getOrder(9595088);
	}

	/**
	 *
	 */
	public function testGetStatusHistory()
	{
		$order = $this->oms->orders->getStatusHistory(9595088);
	}

	/**
	 *
	 */
	public function testGetTracking()
	{
		$this->markTestSkipped( 'PHPUnit will skip this test method' );

		$order = $this->oms->orders->getTracking(9645831);
	}

	/**
	 *
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
	 *
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
	 *
	 */
	public function testGetUser()
	{
		$this->markTestSkipped( 'This method is not yet working' );
		$id = 1128;
		$users = $this->oms->users->getUser($id);
	}

	/**
	 *
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
	 *
	 */
	public function testGetInventory()
	{
		$inventoryId = '16096';
		$audit = $this->oms->inventory->getInventory($inventoryId);
	}

	/**
	 *
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
	 *
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
	 *
	 */
	public function testGetMerchantById()
	{
		$id = '50001';

		$audit = $this->oms->merchants->getMerchantById($id);
	}

	/**
	 *
	 */
	public function testGetMerchantAuditsById()
	{
		$this->markTestSkipped( 'There is not a recordedOn query endpoint yet.' );


		$id = '50001';
		$page = 1;

		$audit = $this->oms->merchants->getMerchantAuditsById($id, $page);
	}

	/**
	 *
	 */
	public function testGetOrderAccountingAuditById()
	{
		$this->markTestSkipped( 'There is not a recordedOn query endpoint yet.' );

		$id = '50001';
		$page = 1;

		$audit = $this->oms->merchants->getOrderAccountingAuditById($id, $page);
	}

	/**
	 *
	 */
	public function testGetInventoryByMerchantId()
	{
		$id = '50001';

		$audit = $this->oms->merchants->getInventoryByMerchantId($id);
	}

	/**
	 *
	 */
	public function testGetShippingMethodsById()
	{
		$id = '50001';

		$audit = $this->oms->merchants->getShippingMethodsById($id);
	}

	/**
	 *
	 */
	public function testGetProductsById()
	{
		$id = '50001';

		$audit = $this->oms->merchants->getProductsById($id);
	}

	/**
	 *
	 */
	public function testGetSkusById()
	{
		$id = '50001';

		$audit = $this->oms->merchants->getSkusById($id);
	}

	/**
	 *
	 */
	public function testGetUsersById()
	{
		$id = '50001';

		$audit = $this->oms->merchants->getUsersById($id);
	}


}