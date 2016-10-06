<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 3:29 PM
 */

namespace Fulfillment\OMS\Models\Response;

use Fulfillment\OMS\Models\Response\Contracts\ContactInfo as ResponseContactInfoContract;

class ContactInfo implements ResponseContactInfoContract {
	/**
	 * @var int
	 */
	public $id;
	/**
	 * @var string
	 */

	public $type;
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
	 * @var int
	 */

	public $phone;
	/**
	 * @var string
	 */

	public $fax;
	/**
	 * @var string
	 */

	public $address1;
	/**
	 * @var string
	 */

	public $address2;
	/**
	 * @var string
	 */

	public $city;
	/**
	 * @var string
	 */
	public $state;
	/**
	 * @var string
	 */
	public $zip;
	/**
	 * @var string
	 */
	public $country;
	/**
	 * @var Country
	 */
	public $iso;
	/**
	 * @var string
	 */
	public $companyName;

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @param string $type
	 */
	public function setType($type)
	{
		$this->type = $type;
	}

	/**
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * @param string $email
	 */
	public function setEmail($email)
	{
		$this->email = $email;
	}

	/**
	 * @return string
	 */
	public function getFirstName()
	{
		return $this->firstName;
	}

	/**
	 * @param string $firstName
	 */
	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;
	}

	/**
	 * @return string
	 */
	public function getLastName()
	{
		return $this->lastName;
	}

	/**
	 * @param string $lastName
	 */
	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
	}

	/**
	 * @return int
	 */
	public function getPhone()
	{
		return $this->phone;
	}

	/**
	 * @param int $phone
	 */
	public function setPhone($phone)
	{
		$this->phone = $phone;
	}

	/**
	 * @return string
	 */
	public function getFax()
	{
		return $this->fax;
	}

	/**
	 * @param string $fax
	 */
	public function setFax($fax)
	{
		$this->fax = $fax;
	}

	/**
	 * @return string
	 */
	public function getAddress1()
	{
		return $this->address1;
	}

	/**
	 * @param string $address1
	 */
	public function setAddress1($address1)
	{
		$this->address1 = $address1;
	}

	/**
	 * @return string
	 */
	public function getAddress2()
	{
		return $this->address2;
	}

	/**
	 * @param string $address2
	 */
	public function setAddress2($address2)
	{
		$this->address2 = $address2;
	}

	/**
	 * @return string
	 */
	public function getCity()
	{
		return $this->city;
	}

	/**
	 * @param string $city
	 */
	public function setCity($city)
	{
		$this->city = $city;
	}

	/**
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
	}

	/**
	 * @param string $state
	 */
	public function setState($state)
	{
		$this->state = $state;
	}

	/**
	 * @return string
	 */
	public function getZip()
	{
		return $this->zip;
	}

	/**
	 * @param string $zip
	 */
	public function setZip($zip)
	{
		$this->zip = $zip;
	}

	/**
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * @param string $country
	 */
	public function setCountry($country)
	{
		$this->country = $country;
	}

	/**
	 * @return Country
	 */
	public function getIso()
	{
		return $this->iso;
	}

	/**
	 * @param Country $iso
	 */
	public function setIso($iso)
	{
		$this->iso = $iso;
	}

	/**
	 * @return string
	 */
	public function getCompanyName()
	{
		return $this->companyName;
	}

	/**
	 * @param string $companyName
	 */
	public function setCompanyName($companyName)
	{
		$this->companyName = $companyName;
	}

}
