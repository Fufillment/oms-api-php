<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/17/15
 * Time: 3:35 PM
 */

namespace Fulfillment\OMS\Models\Request;


use Fulfillment\OMS\Contracts\Validatable;
use Fulfillment\OMS\Models\Request\Base\User as UserBase;
use Fulfillment\OMS\Models\ValidatableBase;
use Fulfillment\OMS\Models\Validation\Traits\UserValidation;
use Fulfillment\OMS\Utilities\ArrayUtil;

class User extends UserBase implements Validatable
{
    use ValidatableBase;
    use UserValidation;

    public function __construct($data = null)
    {
        $this->roles = ArrayUtil::get($data['roles'], []);
        $this->merchantId = ArrayUtil::get($data['merchantId']);
        $this->name = ArrayUtil::get($data['name']);
        $this->email = ArrayUtil::get($data['email']);
        $this->deptLeader = ArrayUtil::get($data['deptLeader'], false);
        $this->createDate = ArrayUtil::get($data['createDate'], new \DateTime());
    }
}