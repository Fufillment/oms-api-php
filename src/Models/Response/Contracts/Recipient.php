<?php


namespace Fulfillment\OMS\Models\Response\Contracts;


interface Recipient extends \Fulfillment\OMS\Models\Request\Contracts\Recipient  {

	public function getIso2();
}