<?php
/**
 * Created by IntelliJ IDEA.
 * User: stevenhawley
 * Date: 10/5/16
 * Time: 4:27 PM
 */

namespace Fulfillment\OMS\Api;

use Fulfillment\OMS\Models\Response\Contracts\MerchantBalanceAudit as ResponseMerchantBalanceAuditContract;

class AuditsApi extends ApiRequestBase {
	public function getMerchants($queryString = null)
	{
		if (is_null($queryString))
		{
			$queryString = [];
		}

		$auditsJson = $this->apiClient->get('audits/balance', $queryString);

		if ($this->jsonOnly)
		{
			$merchants = $auditsJson;
		}
		else
		{
			$merchants = $this->jsonMapper->mapArray($auditsJson->data, [], get_class($this->container->get(ResponseMerchantBalanceAuditContract::class)));
		}

		return $merchants;
	}
}