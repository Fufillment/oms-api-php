<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 2:38 PM
 */

namespace Fulfillment\OMS\Models\Response\Base;


use Fulfillment\OMS\Models\Response\OrderItem;
use Fulfillment\OMS\Models\Response\OrderStatus;

abstract class Order extends \Fulfillment\OMS\Models\Request\Base\Order
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $merchantOrderId;
    /**
     * @var OrderStatus
     */
    public $status;
    /**
     * @var float
     */
    public $shippingCharge;
    /**
     * @var float
     */
    public $totalOz;
    /**
     * @var string
     */
    public $trackingNo;
    /**
     * @var \DateTime
     */
    public $orderedDate;
    /**
     * @var \DateTime
     */
    public $recordedOn;
    /**
     * @var \DateTime
     */
    public $departDate;
    /**
     * @var \DateTime
     */
    public $deliveryDate;
    /**
     * @var \DateTime
     */
    public $returnDate;
    /**
     * @var bool
     */
    public $forceAddress;
    /**
     * @var bool
     */
    public $testOrder;
    /**
     * @var bool
     */
    public $canSplit;
    /**
     * @var bool
     */
    public $hold;
    /**
     * @var bool
     */
    public $isParentOrder;

    /**
     * @var OrderItem[]
     */
    public $orderItems;
    /**
     * @var Recipient
     */
    public $originalConsignee;
    /**
     * @var Recipient
     */
    public $validatedConsignee;

    /**
     * @var OrderStatus[]
     */
    public $statusHistory;

    public $trackingSummary;

    public $trackingEvents;

    /**
     * @var OrderSku[]
     */
    public $orderSkus;
}