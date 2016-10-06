<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 3:37 PM
 */

namespace Fulfillment\OMS\Models\Response\Contracts;

interface Coountry {
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
	public function getIso2();

	/**
	 * @param string $iso2
	 */
	public function setIso2($iso2);
}
