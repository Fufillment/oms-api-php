<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/17/15
 * Time: 3:04 PM
 */

namespace Fulfillment\OMS\Api;

use Fulfillment\OMS\Models\Response\Contracts\Inventory;

class InventoryApi extends ApiRequestBase
{
    /**
     * Return an array of Inventory associated with the authenticating merchant
     *
     * @return array|Inventory[]
     * @throws \Exception
     */
    public function listInventory()
    {
        $json = $this->apiClient->get('inventory');
        if($this->jsonOnly){
            $inventory = $json;
        } else {
	        $inventory = $this->jsonMapper->mapArray($json->data, [], get_class($this->container->get(Inventory::class)));
        }
        return $inventory;
    }

    /**
     * Return the Inventory with the specified Id
     *
     * @param $inventoryId
     * @return mixed|Inventory
     * @throws \Exception
     * @throws \JsonMapper_Exception
     */
	public function getInventory($inventoryId)
	{
        $json = $this->apiClient->get('inventory/' . $inventoryId);
        if($this->jsonOnly){
            $inventory = $json;
        } else {
	        $inventory = $this->jsonMapper->map($json, $this->container->get(Inventory::class));
        }
        return $inventory;
    }

	/**
	 * Get inventory level audits
	 *
	 * @param $inventoryId
	 *
	 * @return mixed|object
	 * @throws \Exception
	 * @throws \JsonMapper_Exception
	 */
	// TODO build InventoryAudit model
	public function getInventoryAuditsById($inventoryId, $page, $limit, $classToMapTo = Inventory::class)
	{
		$inventoryAuditJson = $this->apiClient->get('inventory/' . $inventoryId . '/audits', ['page' => $page, 'limit' => $limit]);

		if ($this->jsonOnly)
		{
			$returnInventoryAudit = $inventoryAuditJson;
		}
		else
		{
			$returnInventoryAudit = $this->jsonMapper->map($inventoryAuditJson, new $classToMapTo());
		}

		return $returnInventoryAudit;

	}
}