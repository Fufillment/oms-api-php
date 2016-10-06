<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 12:10 PM
 */

namespace Fulfillment\OMS\Models\Response\Contracts;

interface MerchantShippingMethod {
	/**
	 * @return int
	 */
	public function getWarehouse();

	/**
	 * @param int $warehouse
	 */
	public function setWarehouse($warehouse);

	/**
	 * @return int
	 */
	public function getMerchant();

	/**
	 * @param int $merchant
	 */
	public function setMerchant($merchant);

	/**
	 * @return string
	 */
	public function getIso2();

	/**
	 * @param string $iso2
	 */
	public function setIso2($iso2);

	/**
	 * @return string
	 */
	public function getMerchantMethod();

	/**
	 * @param string $merchantMethod
	 */
	public function setMerchantMethod($merchantMethod);

	/**
	 * @return \Fulfillment\OMS\Models\Response\CarrierMethod
	 */
	public function getCarrierMethod();

	/**
	 * @param \Fulfillment\OMS\Models\Response\CarrierMethod $carrierMethod
	 */
	public function setCarrierMethod($carrierMethod);
}