<?php
declare (strict_types=1);
namespace Sushma\InterfaceModule\Model;
use Sushma\InterfaceModule\Api\Data\SupplierInterface;
use Sushma\InterfaceModule\Api\Data\SupplierInterfaceFactory;

use Sushma\InterfaceModule\Api\SupplierRepositoryInterface;
use Sushma\InterfaceModule\Api\SupplierRepositoryInterfaceFactory;

use Sushma\InterfaceModule\Model\CodeValidationInterface;

class SupplierRepository implements SupplierRepositoryInterface{
    /** 
     * @param SupplierInterfaceFactory $supplierFactory
     */
    protected SupplierInterfaceFactory $supplierFactory;
    protected CodeValidationInterface $codeValidation;
    
    public function __construct(SupplierInterfaceFactory $supplierFactory, CodeValidationInterface $codeValidation){
        $this->supplierFactory = $supplierFactory;
        $this->codeValidation = $codeValidation;
    }   

    public function createNew(string $code):SupplierInterface{
        $this->codeValidation->validate($code);
        $supplier = $this->supplierFactory->create();
        $supplier->setCode($code);
        return $supplier;
    }
}