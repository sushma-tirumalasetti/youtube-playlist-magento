<?php
declare (strict_types= 1);

namespace Sushma\DispatchEventExample\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Sushma\DispatchEventExample\Block\Example;

class ContentExample implements ObserverInterface{
    // protected Observer $observer;
    public function execute(Observer $observer){
    
        $page= $observer->getData("page");
        $page->getLayout()->addBlock(Example::class,"example_content",'content');
    }
}