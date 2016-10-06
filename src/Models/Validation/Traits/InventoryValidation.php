<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/4/16
 * Time: 10:43 AM
 */

namespace Fulfillment\OMS\Models\Validation\Traits;

use Respect\Validation\Validator as v;

trait InventoryValidation {
	protected function getValidationRules()
	{
		return [
			v::attribute('id', v::numeric()->positive()),
			v::attribute('warehouseId', v::notEmpty()),
			v::attribute('productId', v::notEmpty()),
			v::attribute('quantity', v::numeric()->positive()),
			v::attribute('location', v::stringType()),
			v::attribute('isPriority', v::boolType()),
			v::attribute('isPerishable', v::boolType()),
			v::attribute('isDangerous', v::boolType()),
			v::attribute('isFragile', v::boolType()),
			v::attribute('length', v::numeric()->positive()),
			v::attribute('width', v::numeric()->positive()),
			v::attribute('height', v::numeric()->positive()),
			v::attribute('weight', v::numeric()->positive()),
		];
	}
}