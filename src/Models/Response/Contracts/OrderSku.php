<?php

namespace Fulfillment\OMS\Models\Response\Contracts;

interface OrderSku extends \Fulfillment\OMS\Models\Request\Contracts\OrderSku {
	/**
	 * @return int
	 */
	public function getId();

	/**
	 * @return boolean
	 */
	public function isValid();

	/**
	 * @return string
	 */
	public function getReason();
}