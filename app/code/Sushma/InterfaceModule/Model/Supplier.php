<?php
declare (strict_types=1);
namespace Sushma\InterfaceModule\Model;
use Sushma\InterfaceModule\Api\Data\SupplierInterface;


class Supplier implements SupplierInterface{

    protected string $code;
    public function setCode(string $code):void{
        $this->code = $code;
    }
    public function getCode():string{
        return $this->code;
    }
}