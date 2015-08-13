<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 11:46 AM
 */

namespace Fulfillment\OMS\Models\Request;


use Fulfillment\OMS\Models\ValidatableBase;
use Fulfillment\OMS\Utilities\ArrayUtil;
use Respect\Validation\Validator as v;

class Recipient extends Base\Recipient
{
    use ValidatableBase;

    public function __construct($data = null)
    {
        $this->email     = ArrayUtil::get($data['email']);
        $this->firstName = ArrayUtil::get($data['firstName']);
        $this->lastName  = ArrayUtil::get($data['lastName']);
        $this->address1  = ArrayUtil::get($data['address1']);
        $this->city      = ArrayUtil::get($data['city']);
        $this->state     = ArrayUtil::get($data['state']);
        $this->zip       = ArrayUtil::get($data['zip']);
        $this->country   = ArrayUtil::get($data['country']);
        $this->address2  = ArrayUtil::get($data['address2']);
        $this->phone     = ArrayUtil::get($data['phone']);
        $this->fax       = ArrayUtil::get($data['fax']);
    }

    public function getValidationRules()
    {
        return [
            v::attribute('email', v::email()->notEmpty()),
            v::attribute('firstName', v::alpha()->notEmpty()),
            v::attribute('lastName', v::alpha()->notEmpty()),
            v::attribute('address1', v::string()->notEmpty()),
            v::attribute('city', v::alpha()->notEmpty()),
            v::attribute('state', v::alpha()->notEmpty()),
            v::attribute('zip', v::int()->notEmpty()),
            v::attribute('country', v::countryCode()->notEmpty())
        ];
    }
}