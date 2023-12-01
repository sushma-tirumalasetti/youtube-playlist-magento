<?php
declare (strict_types=1);
namespace Sushma\VirtualTypes\Model;

use Sushma\VirtualTypes\Api\WarehouseRepositoryInterface;
use Magento\Framework\DataObject;
use Sushma\VirtualTypes\Api\WarehouseManagementInterface;

class WarehouseRepository implements WarehouseRepositoryInterface{
    protected WarehouseManagementInterface $warehouseManagement;
    public function __construct(WarehouseManagementInterface $warehouseManagement){
        $this->warehouseManagement = $warehouseManagement;
    }
    public function newWarehouse(string $code) :DataObject{
        return new DataObject($this->warehouseManagement->getWarehouseInfo($code));
    }
}