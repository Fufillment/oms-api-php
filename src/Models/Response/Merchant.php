<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/4/16
 * Time: 4:23 PM
 */

namespace Fulfillment\OMS\Models\Response;

use Fulfillment\OMS\Models\Response\MerchantFees;
use Fulfillment\OMS\Models\Response\Contracts\Merchant as ResponseMerchantContract;

class Merchant implements ResponseMerchantContract {
	/**
	 * @var int
	 */
	public $id;
	/**
	 * @var string
	 */
	public $name;
	/**
	 * @var string
	 */
	public $lastRecordedOn;
	/**
	 * @var double
	 */
	public $accountBal;
	/**
	 * @var boolean
	 */
	public $holdsFunds;
	/**
	 * @var boolean
	 */
	public $holdsClient;
	/**
	 * @var boolean
	 */
	public $orderGrouping;
	/**
	 * @var boolean
	 */
	public $blockShippingApi;
	/**
	 * @var integer
	 */
	public $salesExecutive;
	/**
	 * @var integer
	 */
	public $accountManager;
	/**
	 * @var MerchantFees[]
	 */
	public $fees;

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getLastRecordedOn()
	{
		return $this->lastRecordedOn;
	}

	/**
	 * @param string $lastRecordedOn
	 */
	public function setLastRecordedOn($lastRecordedOn)
	{
		$this->lastRecordedOn = $lastRecordedOn;
	}

	/**
	 * @return float
	 */
	public function getAccountBal()
	{
		return $this->accountBal;
	}

	/**
	 * @param float $accountBal
	 */
	public function setAccountBal($accountBal)
	{
		$this->accountBal = $accountBal;
	}

	/**
	 * @return boolean
	 */
	public function isHoldsFunds()
	{
		return $this->holdsFunds;
	}

	/**
	 * @param boolean $holdsFunds
	 */
	public function setHoldsFunds($holdsFunds)
	{
		$this->holdsFunds = $holdsFunds;
	}

	/**
	 * @return boolean
	 */
	public function isHoldsClient()
	{
		return $this->holdsClient;
	}

	/**
	 * @param boolean $holdsClient
	 */
	public function setHoldsClient($holdsClient)
	{
		$this->holdsClient = $holdsClient;
	}

	/**
	 * @return boolean
	 */
	public function isOrderGrouping()
	{
		return $this->orderGrouping;
	}

	/**
	 * @param boolean $orderGrouping
	 */
	public function setOrderGrouping($orderGrouping)
	{
		$this->orderGrouping = $orderGrouping;
	}

	/**
	 * @return boolean
	 */
	public function isBlockShippingApi()
	{
		return $this->blockShippingApi;
	}

	/**
	 * @param boolean $blockShippingApi
	 */
	public function setBlockShippingApi($blockShippingApi)
	{
		$this->blockShippingApi = $blockShippingApi;
	}

	/**
	 * @return int
	 */
	public function getSalesExecutive()
	{
		return $this->salesExecutive;
	}

	/**
	 * @param int $salesExecutive
	 */
	public function setSalesExecutive($salesExecutive)
	{
		$this->salesExecutive = $salesExecutive;
	}

	/**
	 * @return int
	 */
	public function getAccountManager()
	{
		return $this->accountManager;
	}

	/**
	 * @param int $accountManager
	 */
	public function setAccountManager($accountManager)
	{
		$this->accountManager = $accountManager;
	}

	/**
	 * @return MerchantFees[]
	 */
	public function getFees()
	{
		return $this->fees;
	}

	/**
	 * @param MerchantFees[] $fees
	 */
	public function setFees($fees)
	{
		$this->fees = $fees;
	}

}