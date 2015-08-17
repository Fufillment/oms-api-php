<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/14/15
 * Time: 11:13 AM
 */

namespace Fulfillment\OMS\Models\Response\Base;


abstract class OrderSku extends \Fulfillment\OMS\Models\Request\Base\OrderSku
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var bool
     */
    public $isValid;
    /**
     * @var string
     */
    public $reason;
}