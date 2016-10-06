<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/17/15
 * Time: 3:35 PM
 */

namespace Fulfillment\OMS\Models\Request;


use Fulfillment\OMS\Contracts\Validatable;
use Fulfillment\OMS\Models\Request\Contracts\Recipient;
use Fulfillment\OMS\Models\Request\Contracts\User as RequestUserContract;
use Fulfillment\OMS\Models\ValidatableBase;
use Fulfillment\OMS\Models\Validation\Traits\UserValidation;
use Fulfillment\OMS\Utilities\ArrayUtil;

class User implements Validatable, RequestUserContract
{
    use ValidatableBase;
    use UserValidation;

    public $merchantId;
    public $name;
    public $email;
    public $deptLeader;
    public $createDate;
    public $contactInfo;
    public $roles;


    public function __construct($data = null)
    {
        $this->roles = ArrayUtil::get($data['roles'], []);
        $this->merchantId = ArrayUtil::get($data['merchantId']);
        $this->name = ArrayUtil::get($data['name']);
        $this->email = ArrayUtil::get($data['email']);
        $this->deptLeader = ArrayUtil::get($data['deptLeader'], false);
        $this->createDate = ArrayUtil::get($data['createDate'], new \DateTime());
    }

    /**
     * @return int
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * @param int $merchantId
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return boolean
     */
    public function isDeptLeader()
    {
        return $this->deptLeader;
    }

    /**
     * @param boolean $deptLeader
     */
    public function setDeptLeader($deptLeader)
    {
        $this->deptLeader = $deptLeader;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * @param \DateTime $createDate
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
    }

    /**
     * @return Recipient
     */
    public function getContactInfo()
    {
        return $this->contactInfo;
    }

    /**
     * @param Recipient $contactInfo
     */
    public function setContactInfo($contactInfo)
    {
        $this->contactInfo = $contactInfo;
    }

    /**
     * @return \Fulfillment\OMS\Models\Response\Role[]
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param \Fulfillment\OMS\Models\Response\Role[] $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }

}