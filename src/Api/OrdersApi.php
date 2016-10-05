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

        $ordersJson = $this->apiClient->get('orders', $queryString);

        if ($this->jsonOnly) {
            $orders = $ordersJson;
        } else {
            $orders = $this->jsonMapper->mapArray($ordersJson, [], 'Fulfillment\OMS\Models\Response\Contracts\Order');
        }

        return $orders;
    }

	/**
	 * Return the Order with the specified Id
	 *
	 * @param int $orderId Id of order to retrieve
	 * @param \Fulfillment\OMS\Models\Response\Contracts\Order $classToMapTo A class implementing the Response Order Contract to map the json into
	 *
	 * @return object
	 */
    public function getOrder($orderId, $classToMapTo = Order::class)
    {
        $orderJson = $this->apiClient->get('orders/' . $orderId);

        if ($this->jsonOnly) {
            $order = $orderJson;
        } else {
            $order = $this->jsonMapper->map($orderJson, new $classToMapTo());
        }

        return $order;
    }

    /**
     * Create a new order in the Fulfillment system
     *
     * @param \Fulfillment\OMS\Models\Request\Order|array $order
     * @return object
     * @throws \Exception
     * @throws \Fulfillment\OMS\Exceptions\ValidationFailureException
     * @throws \JsonMapper_Exception
     */
    public function createOrder($order)
    {
        if ($order instanceof \Fulfillment\OMS\Models\Request\Order && $this->validateRequests) {
            $order->validate();
        }

        $orderJson = $this->apiClient->post('orders', $order);

        if ($this->jsonOnly) {
            $returnOrder = $orderJson;
        } else {
            $returnOrder = $this->jsonMapper->map($orderJson, new Order());
        }

        return $returnOrder;
    }

    /**
     * Cancel an Order
     *
     * @param $orderId
     * @throws \Exception
     */
    public function cancelOrder($orderId)
    {
        $this->apiClient->delete('orders/' . $orderId);
    }

    /**
     * Update the recipient of the specified Order
     *
     * @param $orderId
     * @param Recipient|array $recipient
     * @throws \Exception
     * @throws \Fulfillment\OMS\Exceptions\ValidationFailureException
     */
    public function updateRecipient($orderId, $recipient)
    {
        if ($recipient instanceOf Recipient && $this->validateRequests) {
            $recipient->validate();
        }

        $this->apiClient->put('orders/' . $orderId .'/recipient', $recipient);
    }

    /**
     * Add an OrderSku to the specified Order
     *
     * @param $orderId
     * @param OrderSku|array $orderSku
     * @throws \Exception
     * @throws \Fulfillment\OMS\Exceptions\ValidationFailureException
     */
    public function addSku($orderId, $orderSku)
    {
        if ($orderSku instanceof OrderSku && $this->validateRequests) {
            $orderSku->validate();
        }

        $this->apiClient->post('orders/' . $orderId . '/skus', $orderSku);
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
    public function updateSku($orderId, $orderSkuId, $orderSku)
    {
        if ($orderSku instanceof OrderSku && $this->validateRequests) {
            $orderSku->validate();
        }

        $orderSku->validate();
        $this->apiClient->put('orders/' . $orderId . '/skus/', $orderSkuId, $orderSku);
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
        $this->apiClient->delete('orders/' . $orderId . '/skus/', $orderSkuId);
    }


}