<?php
declare (strict_types=1);

namespace Sushma\InjectiblesAndNotInjectiblesExamples\Model;

class Item{
    protected string $code="";

    public function setCode(string $code):void{
        $this->code = $code;
    }

    public function getCode():string{
        return $this->code;
    }
}