<?php
namespace Fulfillment\OMS\Models\Request\Contracts;

interface OrderSku {
	/**
	 * @return int
	 */
	public function getQuantity();

	/**
	 * @param int $quantity
	 */
	public function setQuantity($quantity);

	/**
	 * @return float
	 */
	public function getDeclaredValue();

	/**
	 * @param float $value
	 */
	public function setDeclaredValue($value);

	/**
	 * @return string
	 */
	public function getSku();

	/**
	 * @param string $sku
	 */
	public function setSku($sku);
}