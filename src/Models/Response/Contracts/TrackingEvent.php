<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 1:40 PM
 */

namespace Fulfillment\OMS\Models\Response\Contracts;

interface TrackingEvent {
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
	public function getTime();

	/**
	 * @param string $time
	 */
	public function setTime($time);

	/**
	 * @return string
	 */
	public function getLocation();

	/**
	 * @param string $location
	 */
	public function setLocation($location);

	/**
	 * @return string
	 */
	public function getStatus();

	/**
	 * @param string $status
	 */
	public function setStatus($status);

	/**
	 * @return string
	 */
	public function getStatusCategory();

	/**
	 * @param string $statusCategory
	 */
	public function setStatusCategory($statusCategory);

	/**
	 * @return string
	 */
	public function getSource();

	/**
	 * @param string $source
	 */
	public function setSource($source);
}