<?php
declare(strict_types=1);
namespace Sushma\DependencyInjection\Model\VirtualType;

use Sushma\DependencyInjection\Model\VirtualType\Name;

class UpperCaseName extends Name{
        public function getName(string $name):string{
            return strtoupper(parent::getName($name));
        }

}