<?php
declare (strict_types=1);
namespace Sushma\InjectiblesAndNotInjectiblesExamples\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Sushma\InjectiblesAndNotInjectiblesExamples\Service\Supply;
use Sushma\InjectiblesAndNotInjectiblesExamples\Service\Demand;

class Example implements ArgumentInterface{
    protected Supply $supply;
    protected Demand $demand;
    public function __construct(Supply $supply, Demand $demand){
        $this->supply=$supply;
        $this->demand=$demand;
    }   
    public function getSupply(): Supply{
        return $this->supply;
    }
    public function getDemand():Demand{
        return $this->demand;
    }
}