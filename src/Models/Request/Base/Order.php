<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 11:14 AM
 */

namespace Fulfillment\OMS\Models\Request\Base;

abstract class Order
{
    public $merchantId;
    public $orderId;
    public $items;
    public $recipient;
    public $shippingMethod;
}