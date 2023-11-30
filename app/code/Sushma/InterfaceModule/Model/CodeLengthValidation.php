<?php
declare (strict_types=1);
namespace Sushma\InterfaceModule\Model;

use Sushma\InterfaceModule\Model\CodeValidationInterface;

class CodeLengthValidation implements CodeValidationInterface{
    
    public function validate (string $code):void{
        if(strlen($code)>9){
            throw new InvalidArgumentException("Code must be more than 9 characters");
        }
    }
}