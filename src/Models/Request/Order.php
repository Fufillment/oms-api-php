<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 11:13 AM
 */

namespace Fulfillment\OMS\Models\Request;

use Fulfillment\OMS\Contracts\Validatable;
use Fulfillment\OMS\Models\Request\Contracts\Order as RequestOrderContract;
use Fulfillment\OMS\Models\Request\Contracts\OrderSku;
use Fulfillment\OMS\Models\Request\Contracts\Recipient as RecipientContract;
use Fulfillment\OMS\Models\ValidatableBase;
use Fulfillment\OMS\Models\Validation\Traits\OrderValidation;
use Fulfillment\OMS\Utilities\ArrayUtil;

class Order implements RequestOrderContract, Validatable {
    use ValidatableBase;
    use OrderValidation;

    public $merchantId;
    public $merchantOrderId;
    public $id;
    public $originalConsignee;
    public $shippingMethod;
    public $orderSkus;

    public function __construct($data = null)
    {
        $this->merchantId        = ArrayUtil::get($data['merchantId']);
        $this->merchantOrderId   = ArrayUtil::get($data['merchantOrderId']);
        $this->orderSkus         = ArrayUtil::get($data['orderSkus']);
        $this->originalConsignee = ArrayUtil::get($data['originalConsignee']);

        if (null !== $this->originalConsignee && !$this->originalConsignee instanceof RecipientContract)
        {
            //try to create new Recipient from array of values
            $this->originalConsignee = new Recipient($this->originalConsignee);
        }
        $this->shippingMethod = ArrayUtil::get($data['shippingMethod']);
    }


    /**
     * @return int
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * @param int $merchantId
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;
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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod;
    }

    /**
     * @param string $shippingMethod
     */
    public function setShippingMethod($shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;
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
     * @return RecipientContract
     */
    public function getOriginalConsignee()
    {
        $this->originalConsignee;
    }

    /**
     * @param RecipientContract $originalConsignee
     */
    public function setOriginalConsignee($originalConsignee)
    {
        $this->originalConsignee = $originalConsignee;
    }
}