<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 2:14 PM
 */

namespace Fulfillment\OMS\Models\Response;

use Fulfillment\OMS\Models\Response\Contracts\Product as ResponseProductResponse;


class Product implements ResponseProductResponse {
	/**
	 * @var int
	 */
	public $id;
	/**
	 * @var string
	 */

	public $name;
	/**
	 * @var string
	 */

	public $description;
	/**
	 * @var string
	 */

	public $internalSku;
	/**
	 * @var string
	 */

	public $type;
	/**
	 * @var int
	 */

	public $quantity;
	/**
	 * @var bool
	 */

	public $isActive;
	/**
	 * @var bool
	 */

	public $isCharged;
	/**
	 * @var SkuProduct[]
	 */

	public $skus;
	/**
	 * @var int
	 */

	public $merchantId;
	/**
	 * @var Inventory[]
	 */

	public $inventory;
	/**
	 * @var ProductInsert[]
	 */

	public $inserts;

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
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param string $description
	 */
	public function setDescription($description)
	{
		$this->description = $description;
	}

	/**
	 * @return string
	 */
	public function getInternalSku()
	{
		return $this->internalSku;
	}

	/**
	 * @param string $internalSku
	 */
	public function setInternalSku($internalSku)
	{
		$this->internalSku = $internalSku;
	}

	/**
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @param string $type
	 */
	public function setType($type)
	{
		$this->type = $type;
	}

	/**
	 * @return int
	 */
	public function getQuantity()
	{
		return $this->quantity;
	}

	/**
	 * @param int $quantity
	 */
	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
	}

	/**
	 * @return boolean
	 */
	public function isIsActive()
	{
		return $this->isActive;
	}

	/**
	 * @param boolean $isActive
	 */
	public function setIsActive($isActive)
	{
		$this->isActive = $isActive;
	}

	/**
	 * @return boolean
	 */
	public function isIsCharged()
	{
		return $this->isCharged;
	}

	/**
	 * @param boolean $isCharged
	 */
	public function setIsCharged($isCharged)
	{
		$this->isCharged = $isCharged;
	}

	/**
	 * @return SkuProduct[]
	 */
	public function getSkus()
	{
		return $this->skus;
	}

	/**
	 * @param SkuProduct[] $skus
	 */
	public function setSkus($skus)
	{
		$this->skus = $skus;
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
	 * @return Inventory[]
	 */
	public function getInventory()
	{
		return $this->inventory;
	}

	/**
	 * @param Inventory[] $inventory
	 */
	public function setInventory($inventory)
	{
		$this->inventory = $inventory;
	}

	/**
	 * @return ProductInsert[]
	 */
	public function getInserts()
	{
		return $this->inserts;
	}

	/**
	 * @param ProductInsert[] $inserts
	 */
	public function setInserts($inserts)
	{
		$this->inserts = $inserts;
	}


}