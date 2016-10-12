<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 12:05 PM
 */

namespace Fulfillment\OMS\Models\Response\Contracts;

interface MerchantBalanceAudit {
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
	public function getReason();

	/**
	 * @param string $reason
	 */
	public function setReason($reason);

	/**
	 * @return float
	 */
	public function getAmount();

	/**
	 * @param float $amount
	 */
	public function setAmount($amount);

	/**
	 * @return float
	 */
	public function getOldBalance();

	/**
	 * @param float $oldBalance
	 */
	public function setOldBalance($oldBalance);

	/**
	 * @return float
	 */
	public function getNewBalance();

	/**
	 * @param float $newBalance
	 */
	public function setNewBalance($newBalance);

	/**
	 * @return string[]
	 */
	public function getRecordedOn();

	/**
	 * @param string[] $recordedOn
	 */
	public function setRecordedOn($recordedOn);
}