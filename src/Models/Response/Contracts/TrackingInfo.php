<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 11:43 AM
 */

namespace Fulfillment\OMS\Models\Response\Contracts;

use Fulfillment\OMS\Models\Response\TrackingSummary;
use Fulfillment\OMS\Models\Response\TrackingEvent;

interface TrackingInfo {
	/**
	 * @return \Fulfillment\OMS\Models\Response\TrackingSummary
	 */
	public function getSummary();

	/**
	 * @param \Fulfillment\OMS\Models\Response\TrackingSummary $summary
	 */
	public function setSummary($summary);

	/**
	 * @return TrackingEvent[]
	 */
	public function getEvents();

	/**
	 * @param TrackingEvent[] $events
	 */
	public function setEvents($events);
}