<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 11:14 AM
 */

namespace Fulfillment\OMS\Models\Request\Base;


use Fulfillment\OMS\Contracts\Validatable;

abstract class Order implements Validatable
{
    public $merchantId;
    public $orderId;
    public $items;
    public $recipient;
    public $shippingMethod;
}