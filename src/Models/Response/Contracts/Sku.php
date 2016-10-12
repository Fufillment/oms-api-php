<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 1:38 PM
 */

namespace Fulfillment\OMS\Models\Response\Contracts;

interface Sku {
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
	 * @return int
	 */
	public function getId();

	/**
	 * @param int $id
	 */
	public function setId($id);

	/**
	 * @return SkuProduct[]
	 */
	public function getSkuProducts();

	/**
	 * @param SkuProduct[] $skuProducts
	 */
	public function setSkuProducts($skuProducts);
}