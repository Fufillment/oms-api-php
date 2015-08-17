<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/17/15
 * Time: 3:11 PM
 */

namespace Fulfillment\OMS\Models\Response;


class Inventory
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $warehouseId;
    /**
     * @var int
     */
    public $productId;
    /**
     * @var int
     */
    public $quantity;
    /**
     * @var string
     */
    public $location;
    /**
     * @var bool
     */
    public $isPriority;
    /**
     * @var bool
     */
    public $isPerishable;
    /**
     * @var bool
     */
    public $isDangerous;
    /**
     * @var bool
     */
    public $isFragile;
    /**
     * @var int
     */
    public $length;
    /**
     * @var int
     */
    public $width;
    /**
     * @var int
     */
    public $height;
    /**
     * @var int
     */
    public $weight;
}