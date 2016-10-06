<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 11:50 AM
 */

namespace Fulfillment\OMS\Models\Response\Contracts;

interface Inventory {

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
	public function getWarehouseId();

	/**
	 * @param int $warehouseId
	 */
	public function setWarehouseId($warehouseId);

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
	public function getLocation();

	/**
	 * @param string $location
	 */
	public function setLocation($location);

	/**
	 * @return boolean
	 */
	public function isIsPriority();

	/**
	 * @param boolean $isPriority
	 */
	public function setIsPriority($isPriority);

	/**
	 * @return boolean
	 */
	public function isIsPerishable();

	/**
	 * @param boolean $isPerishable
	 */
	public function setIsPerishable($isPerishable);

	/**
	 * @return boolean
	 */
	public function isIsDangerous();

	/**
	 * @param boolean $isDangerous
	 */
	public function setIsDangerous($isDangerous);

	/**
	 * @return boolean
	 */
	public function isIsFragile();

	/**
	 * @param boolean $isFragile
	 */
	public function setIsFragile($isFragile);

	/**
	 * @return float
	 */
	public function getLength();

	/**
	 * @param float $length
	 */
	public function setLength($length);

	/**
	 * @return mixed
	 */
	public function getHeight();

	/**
	 * @param mixed $height
	 */
	public function setHeight($height);

	/**
	 * @return float
	 */
	public function getWeight();

	/**
	 * @param float $weight
	 */
	public function setWeight($weight);
}