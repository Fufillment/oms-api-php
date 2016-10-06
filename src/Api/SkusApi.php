<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 4:10 PM
 */

namespace Fulfillment\OMS\Api;

use Fulfillment\OMS\Models\Response\Contracts\Sku;
use Fulfillment\OMS\Models\Response\SkuProduct;

class SkusApi extends ApiRequestBase {
	/**
	 * @param      $skuIds
	 * @param null $queryString
	 *
	 * @return mixed
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
			$skus = $this->jsonMapper->mapArray($skusJson, [], 'Fulfillment\OMS\Models\Response\Sku');
		}

		return $skus;
	}

	/**
	 * @param $skuId
	 * @param $classToMapTo
	 *
	 * @return mixed|object
	 * @throws \JsonMapper_Exception
	 */
	public function getSkuById($skuId, $classToMapTo = Sku::class)
	{
		$skuJson = $this->apiClient->get('skus/' . $skuId);

		if ($this->jsonOnly)
		{
			$skus = $skuJson;
		}
		else
		{
			$skus = $this->jsonMapper->map($skuJson, new $classToMapTo());
		}

		return $skus;
	}

	/**
	 * @param $skuId
	 * @param $classToMapTo
	 *
	 * @return mixed
	 */
	public function getSkuProductsBySkuId($skuId, $classToMapTo = SkuProduct::class)
	{
		$skuProductsJson = $this->apiClient->get('skus/' . $skuId . '/products');

		if ($this->jsonOnly)
		{
			$skuProducts = $skuProductsJson;
		}
		else
		{
			$skuProducts = $this->jsonMapper->mapArray($skuProductsJson, [], new $classToMapTo());
		}

		return $skuProducts;
	}
}