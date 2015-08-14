<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/14/15
 * Time: 10:52 AM
 */

namespace Fulfillment\OMS\Models\Request;


use Fulfillment\OMS\Contracts\Validatable;
use Fulfillment\OMS\Models\ValidatableBase;
use Fulfillment\OMS\Utilities\ArrayUtil;
use Respect\Validation\Validator as v;



class OrderSku extends Base\OrderSku implements Validatable
{
    use ValidatableBase;
    use OrderSkuValidation;

    public function __construct($data = null)
    {
        $this->sku           = ArrayUtil::get($data['sku']);
        $this->quantity      = ArrayUtil::get($data['quantity']);
        $this->declaredValue = ArrayUtil::get($data['declaredValue']);
    }
}