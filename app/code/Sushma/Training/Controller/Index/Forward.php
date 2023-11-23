<?php

declare(strict_types=1);
namespace Sushma\Training\Controller\Index;

use \Magento\Framework\App\ActionInterface;

class Forward implements ActionInterface{

    /**
     * @var \Magento\Framework\Controller\Result\ForwardFactory
     */
    protected $forwardFactory;

    /**
     * @param \Magento\Framework\Controller\Result\ForwardFactory $forwardFactory
     */
    public function __construct(\Magento\Framework\Controller\Result\ForwardFactory $forwardFactory){
        $this->forwardFactory = $forwardFactory;
    }
    public function execute(){
        return $this->forwardFactory->create()->forward("page");
    }
    
}