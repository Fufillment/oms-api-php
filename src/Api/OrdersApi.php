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
    public function getOrder($orderId){
       $orderJson = $this->makeRequest('get', 'orders/'.$orderId);
        $order = $this->jsonMapper->map($orderJson, new Order());
        return $order;
    }
}