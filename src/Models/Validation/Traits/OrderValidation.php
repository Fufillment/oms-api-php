<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/14/15
 * Time: 11:39 AM
 */

namespace Fulfillment\OMS\Models\Validation\Traits;
use Respect\Validation\Validator as v;

trait OrderValidation
{
    protected function getValidationRules()
    {
        return [
            v::attribute('merchantId', v::numeric()->positive()),
            v::attribute('orderId', v::notEmpty()),
            v::attribute('items', v::arrayType()), //TODO custom validation rule to test all of these
            v::attribute('recipient', v::instance('Fulfillment\OMS\Models\Request\Recipient')),
            v::attribute('recipient', v::callback([$this->recipient, 'validate'])),
            v::attribute('shippingMethod', v::stringType())
        ];
    }
}