<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/17/15
 * Time: 3:33 PM
 */

namespace Fulfillment\OMS\Models\Request\Base;


use Fulfillment\OMS\Models\Response\Role;

abstract class User
{
    /**
     * @var int
     */
    public $merchantId;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $email;
    /**
     * @var bool
     */
    public $deptLeader;
    /**
     * @var \DateTime
     */
    public $createDate;
    /**
     * @var Recipient
     */
    public $contactInfo;
    /**
     * @var Role[]
     */
    public $roles;
}