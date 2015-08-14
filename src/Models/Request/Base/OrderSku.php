<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/14/15
 * Time: 10:51 AM
 */

namespace Fulfillment\OMS\Models\Request\Base;


abstract class OrderSku
{
    /**
     * @var int
     */
    public $quantity;
    /**
     * @var float
     */
    public $declaredValue;
    /**
     * @var string
     */
    public $sku;
}