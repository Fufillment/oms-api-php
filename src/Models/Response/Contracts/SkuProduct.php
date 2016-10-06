<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 2:22 PM
 */

namespace Fulfillment\OMS\Models\Response\Contracts;

interface SkuProduct {
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
	public function getProductId();

	/**
	 * @param int $productId
	 */
	public function setProductId($productId);

	/**
	 * @return int
	 */
	public function getSkuId();

	/**
	 * @param int $skuId
	 */
	public function setSkuId($skuId);

	/**
	 * @return Sku
	 */
	public function getSku();

	/**
	 * @param Sku $sku
	 */
	public function setSku($sku);

	/**
	 * @return Product
	 */
	public function getProduct();

	/**
	 * @param Product $product
	 */
	public function setProduct($product);
}