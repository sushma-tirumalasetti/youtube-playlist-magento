<?php

declare(strict_types=1);
namespace Sushma\InjectiblesAndNotInjectiblesExamples\Service;

use Sushma\InjectiblesAndNotInjectiblesExamples\Model\Supplier;
use Sushma\InjectiblesAndNotInjectiblesExamples\Model\ItemFactory;
use Sushma\InjectiblesAndNotInjectiblesExamples\Model\Item;

class Supply{
    protected Supplier $supplier;
    protected ItemFactory $itemFactory;

    public function __construct(Supplier $supplier,ItemFactory $itemFactory){
        $this->supplier=$supplier;
        $this->itemFactory = $itemFactory;
    }

    public function getSupplier():Supplier{
        $this->supplier->setCode('123ABC'); 
        return $this->supplier;
    }
    public function getItem():Item{
        $item = $this->itemFactory->create();
        $item->setCode("Item:246");
        return $item;
    }

}