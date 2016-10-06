<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/17/15
 * Time: 3:40 PM
 */

namespace Fulfillment\OMS\Models\Response;

use Fulfillment\OMS\Contracts\Validatable;
use Fulfillment\OMS\Models\Request\User as RequestUser;
use Fulfillment\OMS\Models\Response\Contracts\ContactInfo;
use Fulfillment\OMS\Models\Response\Contracts\User as ResponseUserContract;
use Fulfillment\OMS\Models\ValidatableBase;
use Fulfillment\OMS\Models\Validation\Traits\OrderValidation;
use Fulfillment\OMS\Models\Validation\Traits\UserValidation;

class User extends RequestUser implements ResponseUserContract
{
    use ValidatableBase;
    use OrderValidation;

    /**
     * @var int
     */
    public $userId;
    /**
     * @var int
     */
    public $merchantId;
    /**
     * @var int
     */
    public $name;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $deptLeader;
    /**
     * @var bool
     */
    public $createDate;
    /**
     * @var ContactInfo
     */
    public $contactInfo;
    /**
     * @var Role[]
     */
    public $roles;

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
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