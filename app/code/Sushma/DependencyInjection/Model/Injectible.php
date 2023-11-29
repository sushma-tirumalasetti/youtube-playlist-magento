<?php

declare(strict_types=1);
namespace Sushma\DependencyInjection\Model;
use Sushma\DependencyInjection\Model\InjectibleInterface;
class Injectible implements InjectibleInterface{
    public function getId():String{
        return  "Class Injectible";
    }
}