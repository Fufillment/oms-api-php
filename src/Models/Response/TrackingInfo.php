<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/4/16
 * Time: 1:46 PM
 */
namespace Fulfillment\OMS\Models\Response;

use Fulfillment\OMS\Models\Response\TrackingSummary;
use Fulfillment\OMS\Models\Response\TrackingEvent;
use Fulfillment\OMS\Models\Response\Contracts\TrackingInfo as RequestTrackingInfoContract;


class TrackingInfo implements RequestTrackingInfoContract {
	/**
	 * @return \Fulfillment\OMS\Models\Response\TrackingSummary
	 */
	public function getSummary()
	{
		return $this->summary;
	}

	/**
	 * @param \Fulfillment\OMS\Models\Response\TrackingSummary $summary
	 */
	public function setSummary($summary)
	{
		$this->summary = $summary;
	}

	/**
	 * @return TrackingEvent[]
	 */
	public function getEvents()
	{
		return $this->events;
	}

	/**
	 * @param TrackingEvent[] $events
	 */
	public function setEvents($events)
	{
		$this->events = $events;
	}

	/**
	 * @var TrackingSummary
	 */
	public $summary;
	/**
	 * @var TrackingEvent[]
	 */
	public $events;

}