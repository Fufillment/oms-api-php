<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 3:17 PM
 */

namespace Fulfillment\OMS\Models\Response\Contracts;

interface Insert {
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
	public function getDescription();

	/**
	 * @param string $description
	 */
	public function setDescription($description);

	/**
	 * @return string
	 */
	public function getType();

	/**
	 * @param string $type
	 */
	public function setType($type);

	/**
	 * @return float
	 */
	public function getWeight();

	/**
	 * @param float $weight
	 */
	public function setWeight($weight);
}
