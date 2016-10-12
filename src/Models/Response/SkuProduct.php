<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 2:23 PM
 */

namespace Fulfillment\OMS\Models\Response;

use Fulfillment\OMS\Models\Response\Contracts\SkuProduct as ResponseSkuProductContract;

class SkuProduct implements ResponseSkuProductContract {
	/**
	 * @var int
	 */
	public $quantity;
	/**
	 * @var int
	 */

	public $productId;
	/**
	 * @var int
	 */

	public $skuId;
	/**
	 * @var Sku
	 */

	public $sku;
	/**
	 * @var Product
	 */

	public $product;

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
	public function getProductId()
	{
		return $this->productId;
	}

	/**
	 * @param int $productId
	 */
	public function setProductId($productId)
	{
		$this->productId = $productId;
	}

	/**
	 * @return int
	 */
	public function getSkuId()
	{
		return $this->skuId;
	}

	/**
	 * @param int $skuId
	 */
	public function setSkuId($skuId)
	{
		$this->skuId = $skuId;
	}

	/**
	 * @return Sku
	 */
	public function getSku()
	{
		return $this->sku;
	}

	/**
	 * @param Sku $sku
	 */
	public function setSku($sku)
	{
		$this->sku = $sku;
	}

	/**
	 * @return Product
	 */
	public function getProduct()
	{
		return $this->product;
	}

	/**
	 * @param Product $product
	 */
	public function setProduct($product)
	{
		$this->product = $product;
	}


}