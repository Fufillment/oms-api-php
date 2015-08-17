<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/17/15
 * Time: 3:40 PM
 */

namespace Fulfillment\OMS\Models\Response;


use Fulfillment\OMS\Contracts\Validatable;
use Fulfillment\OMS\Models\ValidatableBase;
use Fulfillment\OMS\Models\Validation\Traits\UserValidation;

class User extends Base\User implements Validatable
{
    use UserValidation;
    use ValidatableBase;
}