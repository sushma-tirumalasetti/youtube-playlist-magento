<?php

declare (strict_types=1);
namespace Sushma\WarehouseMangement\Api;

interface WarehouseManagementInterface{
    public function getWarehouseInfo(string $code) :array;
}