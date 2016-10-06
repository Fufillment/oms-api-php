<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 3:11 PM
 */

namespace Fulfillment\OMS\Models\Response\Contracts;

interface ProductInsert {
	/**
	 * @return int
	 */
	public function getId();

	/**
	 * @param int $id
	 */
	public function setId($id);

	/**
	 * @return int
	 */
	public function getQuantity();

	/**
	 * @param int $quantity
	 */
	public function setQuantity($quantity);

	/**
	 * @return int
	 */
	public function getWarehouseId();

	/**
	 * @param int $warehouseId
	 */
	public function setWarehouseId($warehouseId);

	/**
	 * @return Insert
	 */
	public function getInsert();

	/**
	 * @param Insert $insert
	 */
	public function setInsert($insert);
}
