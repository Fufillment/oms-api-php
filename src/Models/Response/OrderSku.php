<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/14/15
 * Time: 11:26 AM
 */

namespace Fulfillment\OMS\Models\Response;


use Fulfillment\OMS\Contracts\Validatable;
use Fulfillment\OMS\Models\ValidatableBase;
use Fulfillment\OMS\Models\Validation\Traits\OrderSkuValidation;

class OrderSku extends Base\OrderSku implements Validatable
{
    use ValidatableBase;
    use OrderSkuValidation;
}