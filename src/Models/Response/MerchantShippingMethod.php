<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 9:57 AM
 */

namespace Fulfillment\OMS\Models\Response;

use Fulfillment\OMS\Models\Response\CarrierMethod;
use Fulfillment\OMS\Models\Response\Contracts\MerchantShippingMethod as ResponseMerchantShippingMethodContract;

class MerchantShippingMethod implements ResponseMerchantShippingMethodContract {
	/**
	 * @var int
	 */
	public $warehouse;
	/**
	 * @var int
	 */
	public $merchant;
	/**
	 * @var string
	 */
	public $iso2;
	/**
	 * @var string
	 */
	public $merchantMethod;
	/**
	 * @var CarrierMethod
	 */
	public $carrierMethod;

	/**
	 * @return int
	 */
	public function getWarehouse()
	{
		return $this->warehouse;
	}

	/**
	 * @param int $warehouse
	 */
	public function setWarehouse($warehouse)
	{
		$this->warehouse = $warehouse;
	}

	/**
	 * @return int
	 */
	public function getMerchant()
	{
		return $this->merchant;
	}

	/**
	 * @param int $merchant
	 */
	public function setMerchant($merchant)
	{
		$this->merchant = $merchant;
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

	/**
	 * @return string
	 */
	public function getMerchantMethod()
	{
		return $this->merchantMethod;
	}

	/**
	 * @param string $merchantMethod
	 */
	public function setMerchantMethod($merchantMethod)
	{
		$this->merchantMethod = $merchantMethod;
	}

	/**
	 * @return \Fulfillment\OMS\Models\Response\CarrierMethod
	 */
	public function getCarrierMethod()
	{
		return $this->carrierMethod;
	}

	/**
	 * @param \Fulfillment\OMS\Models\Response\CarrierMethod $carrierMethod
	 */
	public function setCarrierMethod($carrierMethod)
	{
		$this->carrierMethod = $carrierMethod;
	}

}