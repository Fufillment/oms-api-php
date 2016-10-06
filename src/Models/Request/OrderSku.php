<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/14/15
 * Time: 10:52 AM
 */

namespace Fulfillment\OMS\Models\Request;


use Fulfillment\OMS\Contracts\Validatable;
use Fulfillment\OMS\Models\Request\Contracts\OrderSku as RequestOrderSkuContract;
use Fulfillment\OMS\Models\ValidatableBase;
use Fulfillment\OMS\Models\Validation\Traits\OrderSkuValidation;
use Fulfillment\OMS\Utilities\ArrayUtil;

class OrderSku implements RequestOrderSkuContract, Validatable
{
    use ValidatableBase;
    use OrderSkuValidation;

    /**
     * @var int
     */
    public $quantity;
    /**
     * @var float
     */
    public $declaredValue;
    /**
     * @var string
     */
    public $sku;

    public function __construct($data = null)
    {
        $this->sku           = ArrayUtil::get($data['sku']);
        $this->quantity      = ArrayUtil::get($data['quantity']);
        $this->declaredValue = ArrayUtil::get($data['declaredValue']);
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
     * @return float
     */
    public function getDeclaredValue()
    {
        return $this->declaredValue;
    }

    /**
     * @param float $value
     */
    public function setDeclaredValue($value)
    {
        $this->declaredValue = $value;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }
}