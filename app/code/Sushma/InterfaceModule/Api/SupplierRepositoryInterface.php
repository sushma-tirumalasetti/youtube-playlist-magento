<?php
declare (strict_types=1);
namespace Sushma\InterfaceModule\Api;

use Sushma\InterfaceModule\Api\Data\SupplierInterface;

interface SupplierRepositoryInterface{

    public function createNew(string $code):SupplierInterface;
}