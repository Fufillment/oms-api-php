<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 12:34 PM
 */

namespace Fulfillment\OMS\Tests;


class DataUtility
{
    public static function requestOrder()
    {
        return [
            'merchantId' => 1234,
            'orderId' => 'test123',
            'items' => [],
            'recipient' => DataUtility::requestRecipient(),
            'shippingMethod' => 'USPS'
        ];
    }

    public static function requestRecipient(){
        return [
            'firstName' => 'Joe',
            'lastName' => 'Schmoe',
            'address1' => '123 Main Street',
            'city' => 'Nowhereville',
            'state' => 'GA',
            'zip' => '30022',
            'email' => 'joe@schmoe.com',
            'country' => 'US'
        ];
    }
}