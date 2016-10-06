<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/4/16
 * Time: 4:35 PM
 */

namespace Fulfillment\OMS\Models\Response;

use Fulfillment\OMS\Models\Response\Contracts\MerchantFees as ResponseMerchantFeesContract;


class MerchantFees implements ResponseMerchantFeesContract {
	/**
	 * @var string
	 */
	public $warehouseName;
	/**
	 * @var int
	 */
	public $warehouseId;
	/**
	 * @var int
	 */
	public $merchantId;
	/**
	 * @var double
	 */
	public $fulfillmentFee;
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
	public $printingFee;
	/**
	 * @var double
	 */
	public $returnFee;

	/**
	 * @return string
	 */
	public function getWarehouseName()
	{
		return $this->warehouseName;
	}

	/**
	 * @param string $warehouseName
	 */
	public function setWarehouseName($warehouseName)
	{
		$this->warehouseName = $warehouseName;
	}

	/**
	 * @return int
	 */
	public function getWarehouseId()
	{
		return $this->warehouseId;
	}

	/**
	 * @param int $warehouseId
	 */
	public function setWarehouseId($warehouseId)
	{
		$this->warehouseId = $warehouseId;
	}

	/**
	 * @return int
	 */
	public function getMerchantId()
	{
		return $this->merchantId;
	}

	/**
	 * @param int $merchantId
	 */
	public function setMerchantId($merchantId)
	{
		$this->merchantId = $merchantId;
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
	public function getPrintingFee()
	{
		return $this->printingFee;
	}

	/**
	 * @param float $printingFee
	 */
	public function setPrintingFee($printingFee)
	{
		$this->printingFee = $printingFee;
	}

	/**
	 * @return float
	 */
	public function getReturnFee()
	{
		return $this->returnFee;
	}

	/**
	 * @param float $returnFee
	 */
	public function setReturnFee($returnFee)
	{
		$this->returnFee = $returnFee;
	}
}