<?php
declare (strict_types=1);
namespace Sushma\DependencyInjection\Model;


class HeavyOperation{
    protected string $name;
    public function __construct(){
        $this->init();
    }
    private function init(){
        $this->name='Class HeavyOperation';
    }

    public function getName():string{
        return $this->name;
    }
}