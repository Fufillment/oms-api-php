<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 1:42 PM
 */

namespace Fulfillment\OMS\Models\Response\Contracts;

interface TrackingSummary {
	/**
	 * @return string
	 */
	public function getTrackingNumber();

	/**
	 * @param string $trackingNumber
	 */
	public function setTrackingNumber($trackingNumber);

	/**
	 * @return string
	 */
	public function getCarrier();

	/**
	 * @param string $carrier
	 */
	public function setCarrier($carrier);

	/**
	 * @return string
	 */
	public function getCarrierShippingClass();

	/**
	 * @param string $carrierShippingClass
	 */
	public function setCarrierShippingClass($carrierShippingClass);

	/**
	 * @return string
	 */
	public function getOrigin();

	/**
	 * @param string $origin
	 */
	public function setOrigin($origin);

	/**
	 * @return string
	 */
	public function getDestination();

	/**
	 * @param string $destination
	 */
	public function setDestination($destination);

	/**
	 * @return string
	 */
	public function getLastCarrierStatus();

	/**
	 * @param string $lastCarrierStatus
	 */
	public function setLastCarrierStatus($lastCarrierStatus);

	/**
	 * @return string
	 */
	public function getLastStatusCategory();

	/**
	 * @param string $lastStatusCategory
	 */
	public function setLastStatusCategory($lastStatusCategory);

	/**
	 * @return string
	 */
	public function getLastStatusDateTime();

	/**
	 * @param string $lastStatusDateTime
	 */
	public function setLastStatusDateTime($lastStatusDateTime);

	/**
	 * @return string
	 */
	public function getLastStatusMessage();

	/**
	 * @param string $lastStatusMessage
	 */
	public function setLastStatusMessage($lastStatusMessage);

	/**
	 * @return string
	 */
	public function getLastCheckedDateTime();

	/**
	 * @param string $lastCheckedDateTime
	 */
	public function setLastCheckedDateTime($lastCheckedDateTime);

	/**
	 * @return string
	 */
	public function getLastUpdatedDateTime();

	/**
	 * @param string $lastUpdatedDateTime
	 */
	public function setLastUpdatedDateTime($lastUpdatedDateTime);

	/**
	 * @return string
	 */
	public function getFirstAddedDateTime();

	/**
	 * @param string $firstAddedDateTime
	 */
	public function setFirstAddedDateTime($firstAddedDateTime);
}