<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 11:51 AM
 */

namespace Fulfillment\OMS\Utilities;


class ArrayUtil
{
    public static function get(&$var, $default = null)
    {
        return isset($var) ? $var : $default;
    }
}