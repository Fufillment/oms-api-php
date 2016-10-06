<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/17/15
 * Time: 3:11 PM
 */

namespace Fulfillment\OMS\Models\Response;

use Fulfillment\OMS\Models\Response\Contracts\Inventory as ResponseInventoryContract;

class Inventory implements ResponseInventoryContract
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $warehouseId;
    /**
     * @var int
     */
    public $productId;

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
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
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
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return boolean
     */
    public function isIsPriority()
    {
        return $this->isPriority;
    }

    /**
     * @param boolean $isPriority
     */
    public function setIsPriority($isPriority)
    {
        $this->isPriority = $isPriority;
    }

    /**
     * @return boolean
     */
    public function isIsPerishable()
    {
        return $this->isPerishable;
    }

    /**
     * @param boolean $isPerishable
     */
    public function setIsPerishable($isPerishable)
    {
        $this->isPerishable = $isPerishable;
    }

    /**
     * @return boolean
     */
    public function isIsDangerous()
    {
        return $this->isDangerous;
    }

    /**
     * @param boolean $isDangerous
     */
    public function setIsDangerous($isDangerous)
    {
        $this->isDangerous = $isDangerous;
    }

    /**
     * @return boolean
     */
    public function isIsFragile()
    {
        return $this->isFragile;
    }

    /**
     * @param boolean $isFragile
     */
    public function setIsFragile($isFragile)
    {
        $this->isFragile = $isFragile;
    }

    /**
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param float $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @var int
     */
    public $quantity;
    /**
     * @var string
     */
    public $location;
    /**
     * @var bool
     */
    public $isPriority;
    /**
     * @var bool
     */
    public $isPerishable;
    /**
     * @var bool
     */
    public $isDangerous;
    /**
     * @var bool
     */
    public $isFragile;
    /**
     * @var float
     */
    public $length;
    /**
     * @var float
    public $width;
     * /**
     * @var float
     */
    public $height;
    /**
     * @var float
     */
    public $weight;
}