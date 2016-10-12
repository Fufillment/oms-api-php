<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 11:47 AM
 */

namespace Fulfillment\OMS\Models\Response\Contracts;

interface CarrierMethod {
	/**
	 * @return int
	 */
	public function getId();

	/**
	 * @param int $id
	 */
	public function setId($id);

	/**
	 * @return int
	 */
	public function getWarehouseId();

	/**
	 * @param int $warehouseId
	 */
	public function setWarehouseId($warehouseId);

	/**
	 * @return int
	 */
	public function getMerchantId();

	/**
	 * @param int $merchantId
	 */
	public function setMerchantId($merchantId);

	/**
	 * @return string
	 */
	public function getCarrierName();

	/**
	 * @param string $carrierName
	 */
	public function setCarrierName($carrierName);

	/**
	 * @return string
	 */
	public function getCarrierMethod();

	/**
	 * @param string $carrierMethod
	 */
	public function setCarrierMethod($carrierMethod);

	/**
	 * @return string
	 */
	public function getCarrierMethodName();

	/**
	 * @param string $carrierMethodName
	 */
	public function setCarrierMethodName($carrierMethodName);

	/**
	 * @return boolean
	 */
	public function isIsTracked();

	/**
	 * @param boolean $isTracked
	 */
	public function setIsTracked($isTracked);

	/**
	 * @return boolean
	 */
	public function isIsDomestic();

	/**
	 * @param boolean $isDomestic
	 */
	public function setIsDomestic($isDomestic);

	/**
	 * @return boolean
	 */
	public function isIsIntUsa();

	/**
	 * @param boolean $isIntUsa
	 */
	public function setIsIntUsa($isIntUsa);

	/**
	 * @return boolean
	 */
	public function isIsEU();

	/**
	 * @param boolean $isEU
	 */
	public function setIsEU($isEU);

	/**
	 * @return int
	 */
	public function getCarrierId();

	/**
	 * @param int $carrierId
	 */
	public function setCarrierId($carrierId);

}