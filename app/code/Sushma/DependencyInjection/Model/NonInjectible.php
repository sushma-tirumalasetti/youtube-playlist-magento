<?php
declare(strict_types=1);
namespace Sushma\DependencyInjection\Model;

use Sushma\DependencyInjection\Model\NonInjectibleInterface;

class NonInjectible implements NonInjectibleInterface{

    public function getId():string{
        return 'Class Non-Injectible';
    }
}