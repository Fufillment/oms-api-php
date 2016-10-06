<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 3:29 PM
 */

namespace Fulfillment\OMS\Models\Response\Contracts;

interface ContactInfo {
	/**
	 * @return int
	 */
	public function getId();

	/**
	 * @param int $id
	 */
	public function setId($id);

	/**
	 * @return string
	 */
	public function getType();

	/**
	 * @param string $type
	 */
	public function setType($type);

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
	 * @return int
	 */
	public function getPhone();

	/**
	 * @param int $phone
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
	public function getAddress1();

	/**
	 * @param string $address1
	 */
	public function setAddress1($address1);

	/**
	 * @return string
	 */
	public function getAddress2();

	/**
	 * @param string $address2
	 */
	public function setAddress2($address2);

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
	 * @return string
	 */
	public function getZip();

	/**
	 * @param string $zip
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
	 * @return Country
	 */
	public function getIso();

	/**
	 * @param Country $iso
	 */
	public function setIso($iso);

	/**
	 * @return string
	 */
	public function getCompanyName();

	/**
	 * @param string $companyName
	 */
	public function setCompanyName($companyName);
}