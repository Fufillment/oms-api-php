<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/4/16
 * Time: 1:55 PM
 */

namespace Fulfillment\OMS\Models\Response;

use Fulfillment\OMS\Models\Response\Contracts\TrackingEvent as ResponseTrackingEventContract;

class TrackingEvent implements ResponseTrackingEventContract {
	/**
	 * @var string
	 */
	public $trackingNumber;
	/**
	 * @var string
	 */
	public $time;
	/**
	 * @var string
	 */
	public $location;
	/**
	 * @var string
	 */
	public $status;
	/**
	 * @var string
	 */
	public $statusCategory;
	/**
	 * @var string
	 */
	public $source;

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
	public function getTime()
	{
		return $this->time;
	}

	/**
	 * @param string $time
	 */
	public function setTime($time)
	{
		$this->time = $time;
	}

	/**
	 * @return string
	 */
	public function getLocation()
	{
		return $this->location;
	}

	/**
	 * @param string $location
	 */
	public function setLocation($location)
	{
		$this->location = $location;
	}

	/**
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}

	/**
	 * @param string $status
	 */
	public function setStatus($status)
	{
		$this->status = $status;
	}

	/**
	 * @return string
	 */
	public function getStatusCategory()
	{
		return $this->statusCategory;
	}

	/**
	 * @param string $statusCategory
	 */
	public function setStatusCategory($statusCategory)
	{
		$this->statusCategory = $statusCategory;
	}

	/**
	 * @return string
	 */
	public function getSource()
	{
		return $this->source;
	}

	/**
	 * @param string $source
	 */
	public function setSource($source)
	{
		$this->source = $source;
	}


}