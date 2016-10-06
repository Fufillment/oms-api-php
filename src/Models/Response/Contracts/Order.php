<?php
namespace Fulfillment\OMS\Models\Response\Contracts;

use Fulfillment\OMS\Models\Request\Contracts\Order as RequestOrderContract;
use Fulfillment\OMS\Models\Response\OrderSku;
use Fulfillment\OMS\Models\Response\OrderStatus;

interface Order extends RequestOrderContract {

	/**
	 * @return OrderStatus
	 */
	public function getStatus();

	/**
	 * @param OrderStatus $status
	 */
	public function setStatus($status);

	/**
	 * @return float
	 */
	public function getShippingCharge();

	/**
	 * @return float
	 */
	public function getTotalOz();

	/**
	 * @return string
	 */
	public function getTrackingNo();

	/**
	 * @return \DateTime
	 */
	public function getOrderedDate();

	/**
	 * @return \DateTime
	 */
	public function getRecordedOn();

	/**
	 * @return \DateTime
	 */
	public function getDepartDate();

	/**
	 * @return \DateTime
	 */
	public function getDeliveryDate();

	/**
	 * @return \DateTime
	 */
	public function getReturnDate();

	/**
	 * @return boolean
	 */
	public function isHold();

	/**
	 * @return \Fulfillment\OMS\Models\Response\OrderItem[]
	 */
	public function getOrderItems();

	/**
	 * @return Recipient
	 */
	public function getValidatedConsignee();

	/**
	 * @param Recipient $validatedConsignee
	 */
	public function setValidatedConsignee($validatedConsignee);

	/**
	 * @return \Fulfillment\OMS\Models\Response\OrderStatus[]
	 */
	public function getStatusHistory();

	/**
	 * @return mixed
	 */
	public function getTrackingSummary();

	/**
	 * @return mixed
	 */
	public function getTrackingEvents();
}