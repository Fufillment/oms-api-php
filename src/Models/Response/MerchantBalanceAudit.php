<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 9:43 AM
 */

namespace Fulfillment\OMS\Models\Response;

use Fulfillment\OMS\Models\Response\Contracts\MerchantBalanceAudit as ResponseMerchantBalanceAuditContract;


class MerchantBalanceAudit implements ResponseMerchantBalanceAuditContract {
	/**
	 * @var int
	 */
	public $id;
	/**
	 * @var string
	 */
	public $reason;
	/**
	 * @var double
	 */
	public $amount;
	/**
	 * @var double
	 */
	public $oldBalance;
	/**
	 * @var double
	 */
	public $newBalance;
	/**
	 * @var string[]
	 */
	public $recordedOn;

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
	public function getReason()
	{
		return $this->reason;
	}

	/**
	 * @param string $reason
	 */
	public function setReason($reason)
	{
		$this->reason = $reason;
	}

	/**
	 * @return float
	 */
	public function getAmount()
	{
		return $this->amount;
	}

	/**
	 * @param float $amount
	 */
	public function setAmount($amount)
	{
		$this->amount = $amount;
	}

	/**
	 * @return float
	 */
	public function getOldBalance()
	{
		return $this->oldBalance;
	}

	/**
	 * @param float $oldBalance
	 */
	public function setOldBalance($oldBalance)
	{
		$this->oldBalance = $oldBalance;
	}

	/**
	 * @return float
	 */
	public function getNewBalance()
	{
		return $this->newBalance;
	}

	/**
	 * @param float $newBalance
	 */
	public function setNewBalance($newBalance)
	{
		$this->newBalance = $newBalance;
	}

	/**
	 * @return string
	 */
	public function getRecordedOn()
	{
		return $this->recordedOn;
	}

	/**
	 * @param string $recordedOn
	 */
	public function setRecordedOn($recordedOn)
	{
		$this->recordedOn = $recordedOn;
	}

}