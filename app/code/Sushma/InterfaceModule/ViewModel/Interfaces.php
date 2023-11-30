<?php
declare (strict_types=1);
namespace Sushma\InterfaceModule\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Sushma\InterfaceModule\Api\SupplierRepositoryInterface;

class Interfaces implements ArgumentInterface{
    protected SupplierRepositoryInterface $supplierRepository;

    public function __construct(SupplierRepositoryInterface $supplierRepository){
        $this->supplierRepository=$supplierRepository;
    }
    public function getSupplierCode():string{
        return  $this->supplierRepository->createNew('ABC-123')->getCode();

    }
}