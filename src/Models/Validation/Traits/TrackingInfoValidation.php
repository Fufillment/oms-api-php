<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/4/16
 * Time: 2:00 PM
 */

namespace Fulfillment\OMS\Models\Validation\Traits;

use Respect\Validation\Validator as v;

trait TrackingInfoValidation {
	protected function getValidationRules()
	{
		return [
			v::attribute('summary', v::notEmpty()), //Create and use custom validation traits later
			v::attribute('events', v::notEmpty()),
		];
	}
}