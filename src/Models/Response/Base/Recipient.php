<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 2:43 PM
 */

namespace Fulfillment\OMS\Models\Response\Base;


abstract class Recipient extends \Fulfillment\OMS\Models\Request\Base\Recipient
{
    public $iso2;
}