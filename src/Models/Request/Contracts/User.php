<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/17/15
 * Time: 3:33 PM
 */

namespace Fulfillment\OMS\Models\Request\Contracts;


use Fulfillment\OMS\Models\Response\Role;

interface User
{
    /**
     * @return int
     */
    public function getMerchantId();

    /**
     * @param int $merchantId
     */
    public function setMerchantId($merchantId);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @param string $email
     */
    public function setEmail($email);

    /**
     * @return boolean
     */
    public function isDeptLeader();

    /**
     * @param boolean $deptLeader
     */
    public function setDeptLeader($deptLeader);

    /**
     * @return \DateTime
     */
    public function getCreateDate();

    /**
     * @param \DateTime $createDate
     */
    public function setCreateDate($createDate);

    /**
     * @return Recipient
     */
    public function getContactInfo();

    /**
     * @param Recipient $contactInfo
     */
    public function setContactInfo($contactInfo);

    /**
     * @return \Fulfillment\OMS\Models\Response\Role[]
     */
    public function getRoles();

    /**
     * @param \Fulfillment\OMS\Models\Response\Role[] $roles
     */
    public function setRoles($roles);


}