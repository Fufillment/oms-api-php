<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/14/15
 * Time: 11:35 AM
 */

namespace Fulfillment\OMS\Models\Response;

use Fulfillment\OMS\Models\Response\Contracts\Sku as ResponseSkuContract;


class Sku implements ResponseSkuContract
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $merchantId;

    /**
     * @var array
     */
    public $skuProducts;

    /**
     * @return array
     */
    public function getSkuProducts()
    {
        return $this->skuProducts;
    }

    /**
     * @param array $skuProducts
     */
    public function setSkuProducts($skuProducts)
    {
        $this->skuProducts = $skuProducts;
    }

    /**
     * @return int
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * @param int $merchantId
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

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


}