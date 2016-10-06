<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 1:21 PM
 */

namespace Fulfillment\OMS\Models\Response\Contracts;

interface OrderAccountingAudit {
	/**
	 * @return int
	 */
	public function getOrderId();

	/**
	 * @param int $orderId
	 */
	public function setOrderId($orderId);

	/**
	 * @return int
	 */
	public function getProductCount();

	/**
	 * @param int $productCount
	 */
	public function setProductCount($productCount);

	/**
	 * @return int
	 */
	public function getInsertCount();

	/**
	 * @param int $insertCount
	 */
	public function setInsertCount($insertCount);

	/**
	 * @return int
	 */
	public function getPrintCount();

	/**
	 * @param int $printCount
	 */
	public function setPrintCount($printCount);

	/**
	 * @return int
	 */
	public function getShippingBoxCount();

	/**
	 * @param int $shippingBoxCount
	 */
	public function setShippingBoxCount($shippingBoxCount);

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
	public function getInsertFee();

	/**
	 * @param float $insertFee
	 */
	public function setInsertFee($insertFee);

	/**
	 * @return float
	 */
	public function getPrintFee();

	/**
	 * @param float $printFee
	 */
	public function setPrintFee($printFee);

	/**
	 * @return float
	 */
	public function getShippingBoxFee();

	/**
	 * @param float $shippingBoxFee
	 */
	public function setShippingBoxFee($shippingBoxFee);

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
	public function getShippingFee();

	/**
	 * @param float $shippingFee
	 */
	public function setShippingFee($shippingFee);

	/**
	 * @return float
	 */
	public function getEnvelopeFee();

	/**
	 * @param float $envelopeFee
	 */
	public function setEnvelopeFee($envelopeFee);

	/**
	 * @return float
	 */
	public function getTotal();

	/**
	 * @param float $total
	 */
	public function setTotal($total);

	/**
	 * @return string
	 */
	public function getRecordedOn();

	/**
	 * @param string $recordedOn
	 */
	public function setRecordedOn($recordedOn);

}