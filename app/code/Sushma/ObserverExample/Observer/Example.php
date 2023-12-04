<?php
declare (strict_types= 1);

namespace Sushma\ObserverExample\Observer;
use Magento\Framework\Event\ObserverInterface;
// use Magento\TestFramework\ErrorLog\Logger;
use Sushma\ObserverExample\Logger\Logger;

use Magento\Framework\Event\Observer;

class Example implements ObserverInterface{
    protected Logger $logger;

    public function __construct(Logger $logger){
        $this->logger = $logger;
    }
    public function execute(Observer $observer){
        $this->logger->info("Event Triggered in global scope");
    }


}