<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 11:01 AM
 */

namespace Fulfillment\OMS\Models\Response\Contracts;

use Fulfillment\OMS\Models\Request\Contracts\User as RequestUserContract;

interface User extends RequestUserContract {

	/**
	 * @return int
	 */
	public function getUserId();

	/**
	 * @param int $userId
	 */
	public function setUserId($userId);

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