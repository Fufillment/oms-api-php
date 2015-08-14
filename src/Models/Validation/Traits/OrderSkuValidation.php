<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/14/15
 * Time: 11:40 AM
 */

namespace Fulfillment\OMS\Models\Validation\Traits;
use Respect\Validation\Validator as v;

trait OrderSkuValidation
{
    protected function getValidationRules()
    {
        return [
            v::attribute('sku', v::string()->notEmpty()),
            v::attribute('quantity', v::int()->positive()),
            v::attribute('declaredValue', v::numeric()->positive())
        ];
    }
}