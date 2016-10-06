<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 2:14 PM
 */

namespace Fulfillment\OMS\Models\Response\Contracts;

interface Product {
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
	public function getDescription();

	/**
	 * @param string $description
	 */
	public function setDescription($description);

	/**
	 * @return string
	 */
	public function getInternalSku();

	/**
	 * @param string $internalSku
	 */
	public function setInternalSku($internalSku);

	/**
	 * @return string
	 */
	public function getType();

	/**
	 * @param string $type
	 */
	public function setType($type);

	/**
	 * @return int
	 */
	public function getQuantity();

	/**
	 * @param int $quantity
	 */
	public function setQuantity($quantity);

	/**
	 * @return boolean
	 */
	public function isIsActive();

	/**
	 * @param boolean $isActive
	 */
	public function setIsActive($isActive);

	/**
	 * @return boolean
	 */
	public function isIsCharged();

	/**
	 * @param boolean $isCharged
	 */
	public function setIsCharged($isCharged);

	/**
	 * @return SkuProduct[]
	 */
	public function getSkus();

	/**
	 * @param SkuProduct[] $skus
	 */
	public function setSkus($skus);

	/**
	 * @return int
	 */
	public function getMerchantId();

	/**
	 * @param int $merchantId
	 */
	public function setMerchantId($merchantId);

	/**
	 * @return Inventory[]
	 */
	public function getInventory();

	/**
	 * @param Inventory[] $inventory
	 */
	public function setInventory($inventory);

	/**
	 * @return ProductInsert[]
	 */
	public function getInserts();

	/**
	 * @param ProductInsert[] $inserts
	 */
	public function setInserts($inserts);

}