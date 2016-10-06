<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 11:53 AM
 */

namespace Fulfillment\OMS\Models\Response\Contracts;

use Fulfillment\OMS\Models\Response\MerchantFees;


interface Merchant {
	/**
	 * @return int
	 */
	public function getId();

	/**
	 * @param int $id
	 */
	public function setId($id);

	/**
	 * @return string
	 */
	public function getName();

	/**
	 * @param string $name
	 */
	public function setName($name);

	/**
	 * @return string
	 */
	public function getLastRecordedOn();

	/**
	 * @param string $lastRecordedOn
	 */
	public function setLastRecordedOn($lastRecordedOn);

	/**
	 * @return float
	 */
	public function getAccountBal();

	/**
	 * @param float $accountBal
	 */
	public function setAccountBal($accountBal);

	/**
	 * @return boolean
	 */
	public function isHoldsFunds();

	/**
	 * @param boolean $holdsFunds
	 */
	public function setHoldsFunds($holdsFunds);

	/**
	 * @return boolean
	 */
	public function isHoldsClient();

	/**
	 * @param boolean $holdsClient
	 */
	public function setHoldsClient($holdsClient);

	/**
	 * @return boolean
	 */
	public function isOrderGrouping();

	/**
	 * @param boolean $orderGrouping
	 */
	public function setOrderGrouping($orderGrouping);

	/**
	 * @return boolean
	 */
	public function isBlockShippingApi();

	/**
	 * @param boolean $blockShippingApi
	 */
	public function setBlockShippingApi($blockShippingApi);

	/**
	 * @return int
	 */
	public function getSalesExecutive();

	/**
	 * @param int $salesExecutive
	 */
	public function setSalesExecutive($salesExecutive);

	/**
	 * @return int
	 */
	public function getAccountManager();

	/**
	 * @param int $accountManager
	 */
	public function setAccountManager($accountManager);

	/**
	 * @return MerchantFees[]
	 */
	public function getFees();

	/**
	 * @param MerchantFees[] $fees
	 */
	public function setFees($fees);
}