<?php

namespace Fulfillment\OMS\Models\Response;

use Fulfillment\OMS\Contracts\Validatable;
use Fulfillment\OMS\Models\ValidatableBase;
use Fulfillment\OMS\Models\Validation\Traits\RecipientValidation;

class Recipient extends Base\Recipient implements Validatable
{
    use ValidatableBase;
    use RecipientValidation;
}