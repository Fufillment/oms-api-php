<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 2:38 PM
 */

namespace Fulfillment\OMS\Models\Response\Base;


abstract class Order extends \Fulfillment\OMS\Models\Request\Base\Order
{
    public $id;
    public $merchantOrderId;
    public $status;
    public $shippingCharge;
    public $totalOz;
    public $trackingNo;
    public $orderedDate;
    public $recordedOn;
    public $departDate;
    public $deliveryDate;
    public $returnDate;
    public $forceAddress;
    public $testOrder;
    public $canSplit;
    public $hold;
    public $isParentOrder;
    public $orderItems;
    public $originalConsignee;
    public $validatedConsignee;
    public $statusHistory;
    public $trackingSummary;
    public $trackingEvents;
    public $orderSkus;
}