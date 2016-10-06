<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/14/15
 * Time: 11:33 AM
 */

namespace Fulfillment\OMS\Models\Response;

use Fulfillment\OMS\Models\Response\Contracts\OrderItem as ResponseOrderItemContract;


class OrderItem implements ResponseOrderItemContract
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $productId;
    /**
     * @var int
     */
    public $quantity;
    /**
     * @var string
     */
    public $lotNum;
    /**
     * @var string
     */
    public $moItemId;
    /**
     * @var float
     */
    public $declaredValue;
    /**
     * @var int
     */
    public $orderId;
    /**
     * @var Sku
     */
    public $sku;
    /**
     * @var int
     */
    public $orderSkuId;

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
    public function getLotNum()
    {
        return $this->lotNum;
    }

    /**
     * @param string $lotNum
     */
    public function setLotNum($lotNum)
    {
        $this->lotNum = $lotNum;
    }

    /**
     * @return string
     */
    public function getMoItemId()
    {
        return $this->moItemId;
    }

    /**
     * @param string $moItemId
     */
    public function setMoItemId($moItemId)
    {
        $this->moItemId = $moItemId;
    }

    /**
     * @return float
     */
    public function getDeclaredValue()
    {
        return $this->declaredValue;
    }

    /**
     * @param float $declaredValue
     */
    public function setDeclaredValue($declaredValue)
    {
        $this->declaredValue = $declaredValue;
    }

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
     * @return Sku
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param Sku $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return int
     */
    public function getOrderSkuId()
    {
        return $this->orderSkuId;
    }

    /**
     * @param int $orderSkuId
     */
    public function setOrderSkuId($orderSkuId)
    {
        $this->orderSkuId = $orderSkuId;
    }

}