<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 11:46 AM
 */

namespace Fulfillment\OMS\Models\Request;

use Fulfillment\OMS\Contracts\Validatable;
use Fulfillment\OMS\Models\Request\Contracts\Recipient as RecipientContract;
use Fulfillment\OMS\Models\ValidatableBase;
use Fulfillment\OMS\Models\Validation\Traits\RecipientValidation;
use Fulfillment\OMS\Utilities\ArrayUtil;


class Recipient implements RecipientContract,Validatable
{
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
	 * @return int
	 */
	public function getZip()
	{
		return $this->zip;
	}

	/**
	 * @param int $zip
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
	 * @return string
	 */
	public function getPhone()
	{
		return $this->phone;
	}

	/**
	 * @param string $phone
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

    use ValidatableBase;
    use RecipientValidation;

    public function __construct($data = null)
    {
        $this->email     = ArrayUtil::get($data['email']);
        $this->firstName = ArrayUtil::get($data['firstName']);
        $this->lastName  = ArrayUtil::get($data['lastName']);
        $this->address1  = ArrayUtil::get($data['address1']);
        $this->city      = ArrayUtil::get($data['city']);
        $this->state     = ArrayUtil::get($data['state']);
        $this->zip       = ArrayUtil::get($data['zip']);
        $this->country   = ArrayUtil::get($data['country']);
        $this->address2  = ArrayUtil::get($data['address2']);
        $this->phone     = ArrayUtil::get($data['phone']);
        $this->fax       = ArrayUtil::get($data['fax']);
    }
}