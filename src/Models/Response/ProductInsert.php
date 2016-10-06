<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 3:11 PM
 */

namespace Fulfillment\OMS\Models\Response;

use Fulfillment\OMS\Models\Response\Contracts\ProductInsert as ResponseProductInsertContract;

class ProductInsert implements ResponseProductInsertContract {
	/**
	 * @var int
	 */
	public $id;
	/**
	 * @var int
	 */

	public $quantity;
	/**
	 * @var int
	 */

	public $warehouseId;
	/**
	 * @var Insert
	 */

	public $insert;

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return int
	 */
	public function getQuantity()
	{
		return $this->quantity;
	}

	/**
	 * @param int $quantity
	 */
	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
	}

	/**
	 * @return int
	 */
	public function getWarehouseId()
	{
		return $this->warehouseId;
	}

	/**
	 * @param int $warehouseId
	 */
	public function setWarehouseId($warehouseId)
	{
		$this->warehouseId = $warehouseId;
	}

	/**
	 * @return Insert
	 */
	public function getInsert()
	{
		return $this->insert;
	}

	/**
	 * @param Insert $insert
	 */
	public function setInsert($insert)
	{
		$this->insert = $insert;
	}


}


