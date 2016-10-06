<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 4:10 PM
 */

namespace Fulfillment\OMS\Api;

use Fulfillment\OMS\Models\Response\Contracts\Sku;
use Fulfillment\OMS\Models\Response\Contracts\SkuProduct;

class SkusApi extends ApiRequestBase {
	/**
	 * @param      $skuIds
	 * @param null $queryString
	 *
	 * @return array|Sku[]
	 */
	public function getSkus($skuIds, $queryString = null)
	{
		if (is_null($queryString))
		{
			$queryString = [];
		}
		$queryString['ids'] = $skuIds;

		$skusJson = $this->apiClient->get('skus', $queryString);

		if ($this->jsonOnly)
		{
			$skus = $skusJson;
		}
		else
		{
			$skus = $this->jsonMapper->mapArray($skusJson, [], get_class($this->container->get(Sku::class)));
		}

		return $skus;
	}

	/**
	 * @param $skuId
	 *
	 * @return array|Sku
	 * @throws \JsonMapper_Exception
	 */
	public function getSkuById($skuId)
	{
		$skuJson = $this->apiClient->get('skus/' . $skuId);

		if ($this->jsonOnly)
		{
			$skus = $skuJson;
		}
		else
		{
			$skus = $this->jsonMapper->map($skuJson, $this->container->get(Sku::class));
		}

		return $skus;
	}

	/**
	 * @param $skuId
	 *
	 * @return array|SkuProduct[]
	 */
	public function getSkuProductsBySkuId($skuId)
	{
		$skuProductsJson = $this->apiClient->get('skus/' . $skuId . '/products');

		if ($this->jsonOnly)
		{
			$skuProducts = $skuProductsJson;
		}
		else
		{
			$skuProducts = $this->jsonMapper->mapArray($skuProductsJson, [], get_class($this->container->get(SkuProduct::class)));
		}

		return $skuProducts;
	}
}