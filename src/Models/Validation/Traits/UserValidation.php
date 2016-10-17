<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/17/15
 * Time: 3:38 PM
 */

namespace Fulfillment\OMS\Models\Validation\Traits;
use Respect\Validation\Validator as v;

trait UserValidation
{
    protected function getValidationRules()
    {
        return [
            v::attribute('merchantId', v::numeric()->positive()),
            v::attribute('name', v::stringType()->notEmpty()),
            v::attribute('email', v::email()->notEmpty()),
            v::attribute('contactInfo', v::instance('Fulfillment\OMS\Models\Request\Recipient')),
            v::attribute('createDate', v::date())
        ];
    }
}