<?php
declare(strict_types=1);
namespace Sushma\DependencyInjection\Model\VirtualType;

class DefaultName{
    protected Name $name;
    public function __construct(Name $name){
        $this->name=$name;
    }

    public function getName():string{
        return $this->name->getName("Default Name");
    }
}