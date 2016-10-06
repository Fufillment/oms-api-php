<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 10:23 AM
 */

namespace Fulfillment\OMS\Models\Response;

use Fulfillment\OMS\Models\Response\Contracts\CarrierMethods as ResponseCarrierMethodContracts;

class CarrierMethod implements ResponseCarrierMethodContracts {
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
	 * @return int
	 */
	public function getWarehouseId()
	{
		return $this->warehouseId;
	}

	/**
	 * @param int $warehouseId
	 */
	public function setWarehouseId($warehouseId)
	{
		$this->warehouseId = $warehouseId;
	}

	/**
	 * @return int
	 */
	public function getMerchantId()
	{
		return $this->merchantId;
	}

	/**
	 * @param int $merchantId
	 */
	public function setMerchantId($merchantId)
	{
		$this->merchantId = $merchantId;
	}

	/**
	 * @return string
	 */
	public function getCarrierName()
	{
		return $this->carrierName;
	}

	/**
	 * @param string $carrierName
	 */
	public function setCarrierName($carrierName)
	{
		$this->carrierName = $carrierName;
	}

	/**
	 * @return string
	 */
	public function getCarrierMethod()
	{
		return $this->carrierMethod;
	}

	/**
	 * @param string $carrierMethod
	 */
	public function setCarrierMethod($carrierMethod)
	{
		$this->carrierMethod = $carrierMethod;
	}

	/**
	 * @return string
	 */
	public function getCarrierMethodName()
	{
		return $this->carrierMethodName;
	}

	/**
	 * @param string $carrierMethodName
	 */
	public function setCarrierMethodName($carrierMethodName)
	{
		$this->carrierMethodName = $carrierMethodName;
	}

	/**
	 * @return boolean
	 */
	public function isIsTracked()
	{
		return $this->isTracked;
	}

	/**
	 * @param boolean $isTracked
	 */
	public function setIsTracked($isTracked)
	{
		$this->isTracked = $isTracked;
	}

	/**
	 * @return boolean
	 */
	public function isIsDomestic()
	{
		return $this->isDomestic;
	}

	/**
	 * @param boolean $isDomestic
	 */
	public function setIsDomestic($isDomestic)
	{
		$this->isDomestic = $isDomestic;
	}

	/**
	 * @return boolean
	 */
	public function isIsIntUsa()
	{
		return $this->isIntUsa;
	}

	/**
	 * @param boolean $isIntUsa
	 */
	public function setIsIntUsa($isIntUsa)
	{
		$this->isIntUsa = $isIntUsa;
	}

	/**
	 * @return boolean
	 */
	public function isIsEU()
	{
		return $this->isEU;
	}

	/**
	 * @param boolean $isEU
	 */
	public function setIsEU($isEU)
	{
		$this->isEU = $isEU;
	}

	/**
	 * @return int
	 */
	public function getCarrierId()
	{
		return $this->carrierId;
	}

	/**
	 * @param int $carrierId
	 */
	public function setCarrierId($carrierId)
	{
		$this->carrierId = $carrierId;
	}

	/**
	 * @var int
	 */
	public $id;
	/**
	 * @var int
	 */
	public $warehouseId;
	/**
	 * @var int
	 */
	public $merchantId;
	/**
	 * @var string
	 */
	public $carrierName;
	/**
	 * @var string
	 */
	public $carrierMethod;
	/**
	 * @var string
	 */
	public $carrierMethodName;
	/**
	 * @var boolean
	 */
	public $isTracked;
	/**
	 * @var boolean
	 */
	public $isDomestic;
	/**
	 * @var boolean
	 */
	public $isIntUsa;
	/**
	 * @var boolean
	 */
	public $isEU;
	/**
	 * @var int
	 */
	public $carrierId;
}