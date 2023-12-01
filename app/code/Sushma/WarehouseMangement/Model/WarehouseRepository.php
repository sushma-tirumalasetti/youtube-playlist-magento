<?php
declare (strict_types=1);
namespace Sushma\WarehouseMangement\Model;

use Sushma\WarehouseMangement\Api\WarehouseRepositoryInterface;
use Magento\Framework\DataObject;
use Sushma\WarehouseMangement\Api\WarehouseManagementInterface;

class WarehouseRepository implements WarehouseRepositoryInterface{
    protected WarehouseManagementInterface $warehouseManagement;
    public function __construct(WarehouseManagementInterface $warehouseManagement){
        $this->warehouseManagement = $warehouseManagement;
    }
    public function newWarehouse(string $code) :DataObject{
        return new DataObject($this->warehouseManagement->getWarehouseInfo($code));
    }
}