<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 2:38 PM
 */

namespace Fulfillment\OMS\Models\Response;


use Fulfillment\OMS\Contracts\Validatable;
use Fulfillment\OMS\Models\ValidatableBase;
use Fulfillment\OMS\Models\Validation\Traits\OrderValidation;

class Order extends Base\Order implements Validatable
{
    use ValidatableBase;
    use OrderValidation;
}