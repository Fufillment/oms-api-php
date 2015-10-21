<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/17/15
 * Time: 3:04 PM
 */

namespace Fulfillment\OMS\Api;


use Fulfillment\OMS\Models\Response\Inventory;

class InventoryApi extends ApiRequestBase
{
    /**
     * Return an array of Inventory associated with the authenticating merchant
     *
     * @return mixed
     * @throws \Exception
     */
    public function listInventory()
    {
        $json = $this->apiClient->get('inventory');
        if($this->jsonOnly){
            $inventory = $json;
        } else {
            $inventory = $this->jsonMapper->mapArray($json, [], 'Fulfillment\OMS\Models\Response\Inventory');
        }
        return $inventory;
    }

    /**
     * Return the Inventory with the specified Id
     *
     * @param $inventoryId
     * @return mixed|object
     * @throws \Exception
     * @throws \JsonMapper_Exception
     */
    public function getInventory($inventoryId){
        $json = $this->apiClient->get('inventory/' . $inventoryId);
        if($this->jsonOnly){
            $inventory = $json;
        } else {
            $inventory = $this->jsonMapper->map($json, new Inventory());
        }
        return $inventory;
    }
}