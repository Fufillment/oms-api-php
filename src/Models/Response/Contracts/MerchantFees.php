<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 12:08 PM
 */

namespace Fulfillment\OMS\Models\Response\Contracts;

interface MerchantFees {

	/**
	 * @return string
	 */
	public function getWarehouseName();

	/**
	 * @param string $warehouseName
	 */
	public function setWarehouseName($warehouseName);

	/**
	 * @return int
	 */
	public function getWarehouseId();

	/**
	 * @param int $warehouseId
	 */
	public function setWarehouseId($warehouseId);

	/**
	 * @return int
	 */
	public function getMerchantId();

	/**
	 * @param int $merchantId
	 */
	public function setMerchantId($merchantId);

	/**
	 * @return float
	 */
	public function getFulfillmentFee();

	/**
	 * @param float $fulfillmentFee
	 */
	public function setFulfillmentFee($fulfillmentFee);

	/**
	 * @return float
	 */
	public function getPickingFee();

	/**
	 * @param float $pickingFee
	 */
	public function setPickingFee($pickingFee);

	/**
	 * @return float
	 */
	public function getKittingFee();

	/**
	 * @param float $kittingFee
	 */
	public function setKittingFee($kittingFee);

	/**
	 * @return float
	 */
	public function getPrintingFee();

	/**
	 * @param float $printingFee
	 */
	public function setPrintingFee($printingFee);

	/**
	 * @return float
	 */
	public function getReturnFee();

	/**
	 * @param float $returnFee
	 */
	public function setReturnFee($returnFee);
}