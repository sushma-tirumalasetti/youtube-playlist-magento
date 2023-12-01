<?php
declare (strict_types=1);
namespace Sushma\VirtualTypes\Model;

use Magento\Framework\DataObject;
use Sushma\VirtualTypes\Model\WarehouseExtendedManagement;
// use Sushma\WarehouseMangement\Api\WarehouseManagementInterface;

class WarehouseRepository extends \Sushma\WarehouseMangement\Model\WarehouseRepository{
    // protected WarehouseExtendedManagement $warehouseManagement;
    public function __construct(WarehouseExtendedManagement $warehouseManagement){
        // $this->warehouseManagement = $warehouseManagement;
        parent::__construct($warehouseManagement);
    }
    public function newWarehouse(string $code) :DataObject{
        dump("sushma");
        if(in_array($code,$this->warehouseManagement->getDiscontinuedWarehouses())){
            throw new \Exception('Warehouse no longer exits');
        }
        return parent::newWarehouse($code);
    }
    // public function newWarehouse(string $code) :DataObject{
    //     return new DataObject($this->warehouseManagement->getWarehouseInfo($code));
    // }
}