<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 3:58 PM
 */

namespace Fulfillment\OMS\Api;

use Fulfillment\OMS\Models\Request\OrderSku;
use Fulfillment\OMS\Models\Request\Recipient;
use Fulfillment\OMS\Models\Response\Order;

class OrdersApi extends ApiRequestBase
{
    /**
     * Return an array of Order objects
     *
     * Will return only Orders for the merchant authenticating the request
     *
     * @param $fromDate
     * @param $toDate
     * @param null $queryString
     * @return mixed
     * @throws \Exception
     */
    public function getOrders($fromDate, $toDate, $queryString = null)
    {

        if (is_null($queryString)) {
            $queryString = [];
        }
        $queryString['fromDate'] = $fromDate;
        $queryString['toDate']   = $toDate;

        $ordersJson = $this->makeRequest('get', 'orders/', null, $queryString);
        $orders     = $this->jsonMapper->mapArray($ordersJson, [], 'Fulfillment\OMS\Models\Response\Order');
        return $orders;
    }

    /**
     * Return the Order with the specified Id
     *
     * @param $orderId
     * @return object
     * @throws \Exception
     * @throws \JsonMapper_Exception
     */
    public function getOrder($orderId)
    {
        $orderJson = $this->makeRequest('get', 'orders/' . $orderId);
        $order     = $this->jsonMapper->map($orderJson, new Order());
        return $order;
    }

    /**
     * Create a new order in the Fulfillment system
     *
     * @param \Fulfillment\OMS\Models\Request\Order $order
     * @return object
     * @throws \Exception
     * @throws \Fulfillment\OMS\Exceptions\ValidationFailureException
     * @throws \JsonMapper_Exception
     */
    public function createOrder(\Fulfillment\OMS\Models\Request\Order $order)
    {
        if ($this->validateRequests) {
            $order->validate();
        }

        $orderJson = $this->makeRequest('post', 'orders', $order);

        $returnedOrder = $this->jsonMapper->map($orderJson, new Order());
        return $returnedOrder;
    }

    /**
     * Cancel an Order
     *
     * @param $orderId
     * @throws \Exception
     */
    public function cancelOrder($orderId)
    {
        $this->makeRequest('delete', 'orders/' . $orderId);
    }

    /**
     * Update the recipient of the specified Order
     *
     * @param $orderId
     * @param Recipient $recipient
     * @throws \Exception
     * @throws \Fulfillment\OMS\Exceptions\ValidationFailureException
     */
    public function updateRecipient($orderId, Recipient $recipient)
    {
        $recipient->validate();
        $this->makeRequest('put', 'orders' . $orderId, $recipient);
    }

    /**
     * Add an OrderSku to the specified Order
     *
     * @param $orderId
     * @param OrderSku $orderSku
     * @throws \Exception
     * @throws \Fulfillment\OMS\Exceptions\ValidationFailureException
     */
    public function addSku($orderId, OrderSku $orderSku)
    {
        $orderSku->validate();
        $this->makeRequest('post', 'orders/' . $orderId . '/skus', $orderSku);
    }

    /**
     * Update an existing OrderSku for the specified Order
     *
     * @param $orderId
     * @param $orderSkuId
     * @param OrderSku $orderSku
     * @throws \Exception
     * @throws \Fulfillment\OMS\Exceptions\ValidationFailureException
     */
    public function updateSku($orderId, $orderSkuId, OrderSku $orderSku)
    {
        $orderSku->validate();
        $this->makeRequest('put', 'orders/' . $orderId . '/skus/', $orderSkuId, $orderSku);
    }

    /**
     * Delete the specified OrderSku from the specified Order
     *
     * @param $orderId
     * @param $orderSkuId
     * @throws \Exception
     */
    public function deleteSku($orderId, $orderSkuId)
    {
        $this->makeRequest('delete', 'orders/' . $orderId . '/skus/', $orderSkuId);
    }


}