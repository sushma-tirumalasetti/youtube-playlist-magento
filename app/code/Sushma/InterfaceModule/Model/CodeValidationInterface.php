<?php
declare (strict_types=1);
namespace Sushma\InterfaceModule\Model;
interface CodeValidationInterface{
    public function validate (string $code):void;
}