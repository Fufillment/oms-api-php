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
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $firstName;
    /**
     * @var string
     */
    public $lastName;
    /**
     * @var string
     */
    public $address1;
    /**
     * @var string
     */
    public $city;
    /**
     * @var string
     */
    public $state;
    /**
     * @var int
     */
    public $zip;
    /**
     * @var string
     */
    public $country;

    //optional
    /**
     * @var string
     */
    public $phone;
    /**
     * @var string
     */
    public $fax;
    /**
     * @var string
     */
    public $address2;
}