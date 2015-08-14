<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/14/15
 * Time: 10:45 AM
 */

namespace Fulfillment\OMS\Models\Response;


class OrderStatus
{
    /**
     * @var \DateTime
     */
    public $date;
    /**
     * @var Status
     */
    public $status;
}