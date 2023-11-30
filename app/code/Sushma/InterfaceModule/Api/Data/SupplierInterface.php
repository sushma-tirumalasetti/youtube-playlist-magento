<?php

declare (strict_types=1);
namespace Sushma\InterfaceModule\Api\Data;

interface SupplierInterface{
    public function setCode(string $code):void;
    public function getCode():string;
}