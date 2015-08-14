<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/14/15
 * Time: 11:33 AM
 */

namespace Fulfillment\OMS\Models\Response;


class OrderItem
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
}