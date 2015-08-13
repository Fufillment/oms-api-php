<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 11:13 AM
 */

namespace Fulfillment\OMS\Models\Request;

use Fulfillment\OMS\Models\Request\Base\Recipient as RecipientBase;
use Fulfillment\OMS\Models\ValidatableBase;
use Fulfillment\OMS\Utilities\ArrayUtil;
use Respect\Validation\Validator as v;

class Order extends Base\Order
{
    use ValidatableBase;

    public function __construct($data = null){
        $this->merchantId = ArrayUtil::get($data['merchantId']);
        $this->orderId = ArrayUtil::get($data['orderId']);
        $this->items = ArrayUtil::get($data['items']);
        $this->recipient = ArrayUtil::get($data['recipient']);

        if(!is_null($this->recipient) && !$this->recipient instanceof RecipientBase && is_array($this->recipient)){
            //try to create new Recipient from array of values
            $this->recipient = new Recipient($this->recipient);
        }

        $this->shippingMethod = ArrayUtil::get($data['shippingMethod']);
    }

    protected function getValidationRules()
    {
        return [
            v::attribute('merchantId', v::numeric()->positive()),
            v::attribute('orderId', v::notEmpty()),
            v::attribute('items', v::arr()), //TODO custom validation rule to test all of these
            v::attribute('recipient', v::instance('Fulfillment\OMS\Models\Request\Recipient')),
            v::attribute('shippingMethod', v::string())
        ];
    }
}