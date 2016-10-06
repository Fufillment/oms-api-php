<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/14/15
 * Time: 11:26 AM
 */

namespace Fulfillment\OMS\Models\Response;


use Fulfillment\OMS\Contracts\Validatable;
use Fulfillment\OMS\Models\Response\Contracts\OrderSku as ResponseOrderSkuContract;
use Fulfillment\OMS\Models\ValidatableBase;
use Fulfillment\OMS\Models\Validation\Traits\OrderSkuValidation;

class OrderSku extends \Fulfillment\OMS\Models\Request\OrderSku implements ResponseOrderSkuContract
{
    use ValidatableBase;
    use OrderSkuValidation;

    /**
     * @var int
     */
    public $id;
    /**
     * @var bool
     */
    public $isValid;
    /**
     * @var string
     */
    public $reason;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return boolean
     */
    public function isValid()
    {
        return $this->isValid;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }
}