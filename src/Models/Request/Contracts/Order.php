<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 11:14 AM
 */

namespace Fulfillment\OMS\Models\Request\Contracts;

interface Order {
    /**
     * @return int
     */
    public function getMerchantId();

    /**
     * @param int $merchantId
     */
    public function setMerchantId($merchantId);

    /**
     * @return string
     */
    public function getMerchantOrderId();

    /**
     * @param string $merchantOrderId
     */
    public function setMerchantOrderId($merchantOrderId);

    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getShippingMethod();

    /**
     * @param string $shippingMethod
     */
    public function setShippingMethod($shippingMethod);

    /**
     * @return OrderSku[]
     */
    public function getOrderSkus();

    /**
     * @param OrderSku[] $orderSkus
     */
    public function setOrderSkus($orderSkus);

    /**
     * @return Recipient
     */
    public function getOriginalConsignee();

    /**
     * @param Recipient $originalConsignee
     */
    public function setOriginalConsignee($originalConsignee);
}