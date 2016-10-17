<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/14/15
 * Time: 11:41 AM
 */

namespace Fulfillment\OMS\Models\Validation\Traits;

use Respect\Validation\Validator as v;

trait RecipientValidation
{
    public function getValidationRules()
    {
        return [
            v::attribute('email', v::email()->notEmpty()),
            v::attribute('firstName', v::alpha()->notEmpty()),
            v::attribute('lastName', v::alpha()->notEmpty()),
            v::attribute('address1', v::stringType()->notEmpty()),
            v::attribute('city', v::alpha()->notEmpty()),
            v::attribute('state', v::alpha()->notEmpty()),
            v::attribute('zip', v::intType()->notEmpty()),
            v::attribute('country', v::countryCode()->notEmpty())
        ];
    }
}