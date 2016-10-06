<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 1:26 PM
 */

namespace Fulfillment\OMS\Models\Response\Contracts;

interface OrderItem {
	/**
	 * @return int
	 */
	public function getId();

	/**
	 * @param int $id
	 */
	public function setId($id);

	/**
	 * @return int
	 */
	public function getProductId();

	/**
	 * @param int $productId
	 */
	public function setProductId($productId);

	/**
	 * @return int
	 */
	public function getQuantity();

	/**
	 * @param int $quantity
	 */
	public function setQuantity($quantity);

	/**
	 * @return string
	 */
	public function getLotNum();

	/**
	 * @param string $lotNum
	 */
	public function setLotNum($lotNum);

	/**
	 * @return string
	 */
	public function getMoItemId();

	/**
	 * @param string $moItemId
	 */
	public function setMoItemId($moItemId);

	/**
	 * @return float
	 */
	public function getDeclaredValue();

	/**
	 * @param float $declaredValue
	 */
	public function setDeclaredValue($declaredValue);

	/**
	 * @return int
	 */
	public function getOrderId();

	/**
	 * @param int $orderId
	 */
	public function setOrderId($orderId);

	/**
	 * @return Sku
	 */
	public function getSku();

	/**
	 * @param Sku $sku
	 */
	public function setSku($sku);

	/**
	 * @return int
	 */
	public function getOrderSkuId();

	/**
	 * @param int $orderSkuId
	 */
	public function setOrderSkuId($orderSkuId);
}