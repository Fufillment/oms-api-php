<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 9:47 AM
 */

namespace Fulfillment\OMS\Models\Response;

use Fulfillment\OMS\Models\Response\Contracts\OrderAccountingAudit as ResponseOrderAccountingAuditContract;


class OrderAccountingAudit implements ResponseOrderAccountingAuditContract {
	/**
	 * @var int
	 */
	public $orderId;
	/**
	 * @var int
	 */
	public $productCount;
	/**
	 * @var int
	 */
	public $insertCount;
	/**
	 * @var int
	 */
	public $printCount;
	/**
	 * @var int
	 */
	public $shippingBoxCount;
	/**
	 * @var double
	 */
	public $pickingFee;
	/**
	 * @var double
	 */
	public $kittingFee;
	/**
	 * @var double
	 */
	public $insertFee;
	/**
	 * @var double
	 */
	public $printFee;
	/**
	 * @var double
	 */
	public $shippingBoxFee;
	/**
	 * @var double
	 */
	public $fulfillmentFee;
	/**
	 * @var double
	 */
	public $shippingFee;
	/**
	 * @var double
	 */
	public $envelopeFee;
	/**
	 * @var double
	 */
	public $total;
	/**
	 * @var string
	 */
	public $recordedOn;

	/**
	 * @return int
	 */
	public function getOrderId()
	{
		return $this->orderId;
	}

	/**
	 * @param int $orderId
	 */
	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
	}

	/**
	 * @return int
	 */
	public function getProductCount()
	{
		return $this->productCount;
	}

	/**
	 * @param int $productCount
	 */
	public function setProductCount($productCount)
	{
		$this->productCount = $productCount;
	}

	/**
	 * @return int
	 */
	public function getInsertCount()
	{
		return $this->insertCount;
	}

	/**
	 * @param int $insertCount
	 */
	public function setInsertCount($insertCount)
	{
		$this->insertCount = $insertCount;
	}

	/**
	 * @return int
	 */
	public function getPrintCount()
	{
		return $this->printCount;
	}

	/**
	 * @param int $printCount
	 */
	public function setPrintCount($printCount)
	{
		$this->printCount = $printCount;
	}

	/**
	 * @return int
	 */
	public function getShippingBoxCount()
	{
		return $this->shippingBoxCount;
	}

	/**
	 * @param int $shippingBoxCount
	 */
	public function setShippingBoxCount($shippingBoxCount)
	{
		$this->shippingBoxCount = $shippingBoxCount;
	}

	/**
	 * @return float
	 */
	public function getPickingFee()
	{
		return $this->pickingFee;
	}

	/**
	 * @param float $pickingFee
	 */
	public function setPickingFee($pickingFee)
	{
		$this->pickingFee = $pickingFee;
	}

	/**
	 * @return float
	 */
	public function getKittingFee()
	{
		return $this->kittingFee;
	}

	/**
	 * @param float $kittingFee
	 */
	public function setKittingFee($kittingFee)
	{
		$this->kittingFee = $kittingFee;
	}

	/**
	 * @return float
	 */
	public function getInsertFee()
	{
		return $this->insertFee;
	}

	/**
	 * @param float $insertFee
	 */
	public function setInsertFee($insertFee)
	{
		$this->insertFee = $insertFee;
	}

	/**
	 * @return float
	 */
	public function getPrintFee()
	{
		return $this->printFee;
	}

	/**
	 * @param float $printFee
	 */
	public function setPrintFee($printFee)
	{
		$this->printFee = $printFee;
	}

	/**
	 * @return float
	 */
	public function getShippingBoxFee()
	{
		return $this->shippingBoxFee;
	}

	/**
	 * @param float $shippingBoxFee
	 */
	public function setShippingBoxFee($shippingBoxFee)
	{
		$this->shippingBoxFee = $shippingBoxFee;
	}

	/**
	 * @return float
	 */
	public function getFulfillmentFee()
	{
		return $this->fulfillmentFee;
	}

	/**
	 * @param float $fulfillmentFee
	 */
	public function setFulfillmentFee($fulfillmentFee)
	{
		$this->fulfillmentFee = $fulfillmentFee;
	}

	/**
	 * @return float
	 */
	public function getShippingFee()
	{
		return $this->shippingFee;
	}

	/**
	 * @param float $shippingFee
	 */
	public function setShippingFee($shippingFee)
	{
		$this->shippingFee = $shippingFee;
	}

	/**
	 * @return float
	 */
	public function getEnvelopeFee()
	{
		return $this->envelopeFee;
	}

	/**
	 * @param float $envelopeFee
	 */
	public function setEnvelopeFee($envelopeFee)
	{
		$this->envelopeFee = $envelopeFee;
	}

	/**
	 * @return float
	 */
	public function getTotal()
	{
		return $this->total;
	}

	/**
	 * @param float $total
	 */
	public function setTotal($total)
	{
		$this->total = $total;
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