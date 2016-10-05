<?php

namespace Fulfillment\OMS\Models\Response;

use Fulfillment\OMS\Contracts\Validatable;
use Fulfillment\OMS\Models\Request\Recipient as RequestRecipient;
use Fulfillment\OMS\Models\Response\Contracts\Recipient as RecipientContract;
use Fulfillment\OMS\Models\ValidatableBase;
use Fulfillment\OMS\Models\Validation\Traits\RecipientValidation;

class Recipient extends RequestRecipient implements RecipientContract
{
	public $iso2;

    use ValidatableBase;
    use RecipientValidation;

	public function getIso2()
	{
		return $this->iso2;
	}
}