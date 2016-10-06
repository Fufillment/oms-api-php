<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 11:35 AM
 */
namespace Fulfillment\OMS\Models\Response\Contracts;

interface Status {
	/**
	 * @return int
	 */
	public function getId();

	/**
	 * @param int $id
	 */
	public function setId($id);

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
	public function getReason();

	/**
	 * @param string $reason
	 */
	public function setReason($reason);

	/**
	 * @return boolean
	 */
	public function isIsClosed();

	/**
	 * @param boolean $isClosed
	 */
	public function setIsClosed($isClosed);
}