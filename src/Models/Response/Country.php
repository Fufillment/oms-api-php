<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 3:37 PM
 */

namespace Fulfillment\OMS\Models\Response;

use Fulfillment\OMS\Models\Response\Contracts\Country as ResponseCountryContract;

class Country implements ResponseCountryContract {
	/**
	 * @var string
	 */
	public $name;
	/**
	 * @var string
	 */

	public $iso2;

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getIso2()
	{
		return $this->iso2;
	}

	/**
	 * @param string $iso2
	 */
	public function setIso2($iso2)
	{
		$this->iso2 = $iso2;
	}


}
