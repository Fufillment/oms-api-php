<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 3:58 PM
 */

namespace Fulfillment\OMS\Api;

use Fulfillment\OMS\Models\Response\Order;

class OrdersApi extends ApiRequestBase
{
    public function getOrder($orderId, $queryString = null)
    {
        $orderJson = $this->makeRequest('get', 'orders/' . $orderId, null, $queryString);
        $order     = $this->jsonMapper->map($orderJson, new Order());
        return $order;
    }

    public function createOrder(\Fulfillment\OMS\Models\Request\Order $order, $queryString = null)
    {
        if ($this->validateRequests) {
            $order->validate();
        }

        $orderJson = $this->makeRequest('post', 'orders', $order, $queryString);

        $returnedOrder = $this->jsonMapper->map($orderJson, new Order());
        return $returnedOrder;
    }
}