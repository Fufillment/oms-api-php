<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/14/15
 * Time: 10:47 AM
 */

namespace Fulfillment\OMS\Models\Response;


class Status
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $reason;
    /**
     * @var bool
     */
    public $isClosed;
}