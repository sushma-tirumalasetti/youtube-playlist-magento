<?php
declare(strict_types=1);
namespace Sushma\DependencyInjection\Model\VirtualType;


class Name{
    public function getName(string $name):string{
        return $name;
    }
}