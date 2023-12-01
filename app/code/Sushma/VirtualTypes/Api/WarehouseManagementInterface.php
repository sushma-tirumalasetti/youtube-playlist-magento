<?php

declare (strict_types=1);
namespace Sushma\VirtualTypes\Api;

interface WarehouseManagementInterface{
    public function getWarehouseInfo(string $code) :array;
}