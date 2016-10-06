<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 2:38 PM
 */

namespace Fulfillment\OMS\Models\Response;


use Fulfillment\OMS\Contracts\Validatable;
use Fulfillment\OMS\Models\Request\Contracts\Recipient;
use Fulfillment\OMS\Models\Request\Order as RequestOrder;
use Fulfillment\OMS\Models\Response\Contracts\Order as ResponseOrderContract;
use Fulfillment\OMS\Models\ValidatableBase;
use Fulfillment\OMS\Models\Validation\Traits\OrderValidation;

class Order extends RequestOrder implements ResponseOrderContract
{
    use ValidatableBase;
    use OrderValidation;

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
    public $validatedConsignee;

    /**
     * @var OrderStatus[]
     */
    public $statusHistory;

    public $trackingSummary;

    public $trackingEvents;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getMerchantOrderId()
    {
        return $this->merchantOrderId;
    }

    /**
     * @param string $merchantOrderId
     */
    public function setMerchantOrderId($merchantOrderId)
    {
        $this->merchantOrderId = $merchantOrderId;
    }

    /**
     * @return OrderStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param OrderStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return float
     */
    public function getShippingCharge()
    {
        return $this->shippingCharge;
    }

    /**
     * @return float
     */
    public function getTotalOz()
    {
        return $this->totalOz;
    }

    /**
     * @return string
     */
    public function getTrackingNo()
    {
        return $this->trackingNo;
    }

    /**
     * @return \DateTime
     */
    public function getOrderedDate()
    {
        return $this->orderedDate;
    }

    /**
     * @return \DateTime
     */
    public function getRecordedOn()
    {
        return $this->recordedOn;
    }

    /**
     * @return \DateTime
     */
    public function getDepartDate()
    {
        return $this->departDate;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * @return \DateTime
     */
    public function getReturnDate()
    {
        return $this->returnDate;
    }

    /**
     * @return boolean
     */
    public function isHold()
    {
        return $this->hold;
    }

    /**
     * @return \Fulfillment\OMS\Models\Response\OrderItem[]
     */
    public function getOrderItems()
    {
        return $this->orderItems;
    }

    /**
     * @return Recipient
     */
    public function getOriginalConsignee()
    {
        return $this->originalConsignee;
    }

    /**
     * @param Recipient $originalConsignee
     */
    public function setOriginalConsignee($originalConsignee)
    {
        $this->originalConsignee = $originalConsignee;
    }

    /**
     * @return OrderSku[]
     */
    public function getOrderSkus()
    {
        return $this->orderSkus;
    }

    /**
     * @param OrderSku[] $orderSkus
     */
    public function setOrderSkus($orderSkus)
    {
        $this->orderSkus = $orderSkus;
    }

    /**
     * @return Recipient
     */
    public function getValidatedConsignee()
    {
        return $this->validatedConsignee;
    }

    /**
     * @param Recipient $validatedConsignee
     */
    public function setValidatedConsignee($validatedConsignee)
    {
        $this->validatedConsignee = $validatedConsignee;
    }

    /**
     * @return \Fulfillment\OMS\Models\Response\OrderStatus[]
     */
    public function getStatusHistory()
    {
        return $this->statusHistory;
    }

    /**
     * @return mixed
     */
    public function getTrackingSummary()
    {
        return $this->trackingSummary;
    }

    /**
     * @return mixed
     */
    public function getTrackingEvents()
    {
        return $this->trackingEvents;
    }
}