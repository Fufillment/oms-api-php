<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 1:29 PM
 */

namespace Fulfillment\OMS\Models\Response\Contracts;

interface OrderStatus {
	/**
	 * @return \DateTime
	 */
	public function getDate();


	/**
	 * @param \DateTime $date
	 */
	public function setDate($date);


	/**
	 * @return Status
	 */
	public function getStatus();


	/**
	 * @param Status $status
	 */
	public function setStatus($status);

}