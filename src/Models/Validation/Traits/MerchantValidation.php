<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/4/16
 * Time: 3:27 PM
 */

namespace Fulfillment\OMS\Models\Validation\Traits;

use Respect\Validation\Validator as v;

trait MerchantValidation {
	protected function getValidationRules()
	{
		return [
			v::attribute('id', v::numeric()->positive()),
			v::attribute('name', v::stringType()),
			v::attribute('lastRecordedOn', v::stringType()),
			v::attribute('accountBal', v::numeric()),
			v::attribute('holdsFunds', v::boolType()),
			v::attribute('holdsClient', v::boolType()),
			v::attribute('orderGrouping', v::boolType()),
			v::attribute('blockShippingApi', v::boolType()),
			v::attribute('salesExecutive', v::numeric()),
			v::attribute('accountManager', v::numeric()->positive()),
			v::attribute('fees', v::numeric()->positive()),
		];
	}
}