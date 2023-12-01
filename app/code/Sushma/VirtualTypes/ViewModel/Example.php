<?php
declare(strict_types=1);
namespace Sushma\VirtualTypes\ViewModel;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Sushma\VirtualTypes\Api\WarehouseRepositoryInterface;

class Example implements ArgumentInterface{

    protected WarehouseRepositoryInterface $warehouseRepository;
    public function __construct(WarehouseRepositoryInterface $warehouseRepository){
        $this->warehouseRepository = $warehouseRepository;
    }
    public function getWarehouse(RequestInterface $request){
        return $this->warehouseRepository->newWarehouse((string) $request->getParam('code'));
    }
}