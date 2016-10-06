<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 11:40 AM
 */

namespace Fulfillment\OMS\Models\Request\Contracts;

interface Recipient {
    /**
     * @return string
     */
    public function getEmail();

    /**
     * @param string $email
     */
    public function setEmail($email);

    /**
     * @return string
     */
    public function getFirstName();

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName);

    /**
     * @return string
     */
    public function getLastName();

    /**
     * @param string $lastName
     */
    public function setLastName($lastName);

    /**
     * @return string
     */
    public function getAddress1();

    /**
     * @param string $address1
     */
    public function setAddress1($address1);

    /**
     * @return string
     */
    public function getCity();

    /**
     * @param string $city
     */
    public function setCity($city);

    /**
     * @return string
     */
    public function getState();

    /**
     * @param string $state
     */
    public function setState($state);

    /**
     * @return int
     */
    public function getZip();

    /**
     * @param int $zip
     */
    public function setZip($zip);

    /**
     * @return string
     */
    public function getCountry();

    /**
     * @param string $country
     */
    public function setCountry($country);

    /**
     * @return string
     */
    public function getPhone();

    /**
     * @param string $phone
     */
    public function setPhone($phone);

    /**
     * @return string
     */
    public function getFax();

    /**
     * @param string $fax
     */
    public function setFax($fax);

    /**
     * @return string
     */
    public function getAddress2();

    /**
     * @param string $address2
     */
    public function setAddress2($address2);
}