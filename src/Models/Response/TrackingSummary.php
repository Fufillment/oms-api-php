<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/4/16
 * Time: 1:52 PM
 */

namespace Fulfillment\OMS\Models\Response;

use Fulfillment\OMS\Models\Response\Contracts\TrackingSummary as ResponseTrackingSummaryContract;


class TrackingSummary implements ResponseTrackingSummaryContract {
	/**
	 * @var string
	 */
	public $trackingNumber;
	/**
	 * @var string
	 */
	public $carrier;
	/**
	 * @var string
	 */
	public $carrierShippingClass;
	/**
	 * @var string
	 */
	public $origin;
	/**
	 * @var string
	 */
	public $destination;
	/**
	 * @var string
	 */
	public $lastCarrierStatus;
	/**
	 * @var string
	 */
	public $lastStatusCategory;
	/**
	 * @var string
	 */
	public $lastStatusDateTime;
	/**
	 * @var string
	 */
	public $lastStatusMessage;
	/**
	 * @var string
	 */
	public $lastCheckedDateTime;
	/**
	 * @var string
	 */
	public $lastUpdatedDateTime;
	/**
	 * @var string
	 */
	public $firstAddedDateTime;

	/**
	 * @return string
	 */
	public function getTrackingNumber()
	{
		return $this->trackingNumber;
	}

	/**
	 * @param string $trackingNumber
	 */
	public function setTrackingNumber($trackingNumber)
	{
		$this->trackingNumber = $trackingNumber;
	}

	/**
	 * @return string
	 */
	public function getCarrier()
	{
		return $this->carrier;
	}

	/**
	 * @param string $carrier
	 */
	public function setCarrier($carrier)
	{
		$this->carrier = $carrier;
	}

	/**
	 * @return string
	 */
	public function getCarrierShippingClass()
	{
		return $this->carrierShippingClass;
	}

	/**
	 * @param string $carrierShippingClass
	 */
	public function setCarrierShippingClass($carrierShippingClass)
	{
		$this->carrierShippingClass = $carrierShippingClass;
	}

	/**
	 * @return string
	 */
	public function getOrigin()
	{
		return $this->origin;
	}

	/**
	 * @param string $origin
	 */
	public function setOrigin($origin)
	{
		$this->origin = $origin;
	}

	/**
	 * @return string
	 */
	public function getDestination()
	{
		return $this->destination;
	}

	/**
	 * @param string $destination
	 */
	public function setDestination($destination)
	{
		$this->destination = $destination;
	}

	/**
	 * @return string
	 */
	public function getLastCarrierStatus()
	{
		return $this->lastCarrierStatus;
	}

	/**
	 * @param string $lastCarrierStatus
	 */
	public function setLastCarrierStatus($lastCarrierStatus)
	{
		$this->lastCarrierStatus = $lastCarrierStatus;
	}

	/**
	 * @return string
	 */
	public function getLastStatusCategory()
	{
		return $this->lastStatusCategory;
	}

	/**
	 * @param string $lastStatusCategory
	 */
	public function setLastStatusCategory($lastStatusCategory)
	{
		$this->lastStatusCategory = $lastStatusCategory;
	}

	/**
	 * @return string
	 */
	public function getLastStatusDateTime()
	{
		return $this->lastStatusDateTime;
	}

	/**
	 * @param string $lastStatusDateTime
	 */
	public function setLastStatusDateTime($lastStatusDateTime)
	{
		$this->lastStatusDateTime = $lastStatusDateTime;
	}

	/**
	 * @return string
	 */
	public function getLastStatusMessage()
	{
		return $this->lastStatusMessage;
	}

	/**
	 * @param string $lastStatusMessage
	 */
	public function setLastStatusMessage($lastStatusMessage)
	{
		$this->lastStatusMessage = $lastStatusMessage;
	}

	/**
	 * @return string
	 */
	public function getLastCheckedDateTime()
	{
		return $this->lastCheckedDateTime;
	}

	/**
	 * @param string $lastCheckedDateTime
	 */
	public function setLastCheckedDateTime($lastCheckedDateTime)
	{
		$this->lastCheckedDateTime = $lastCheckedDateTime;
	}

	/**
	 * @return string
	 */
	public function getLastUpdatedDateTime()
	{
		return $this->lastUpdatedDateTime;
	}

	/**
	 * @param string $lastUpdatedDateTime
	 */
	public function setLastUpdatedDateTime($lastUpdatedDateTime)
	{
		$this->lastUpdatedDateTime = $lastUpdatedDateTime;
	}

	/**
	 * @return string
	 */
	public function getFirstAddedDateTime()
	{
		return $this->firstAddedDateTime;
	}

	/**
	 * @param string $firstAddedDateTime
	 */
	public function setFirstAddedDateTime($firstAddedDateTime)
	{
		$this->firstAddedDateTime = $firstAddedDateTime;
	}


}