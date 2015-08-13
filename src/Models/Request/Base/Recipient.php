<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 11:40 AM
 */

namespace Fulfillment\OMS\Models\Request\Base;

abstract class Recipient
{
    //required
    public $email;
    public $firstName;
    public $lastName;
    public $address1;
    public $city;
    public $state;
    public $zip;
    public $country;

    //optional
    public $phone;
    public $fax;
    public $address2;
}