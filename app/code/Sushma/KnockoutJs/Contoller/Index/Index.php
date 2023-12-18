<?php
declare (strict_types=1);

namespace Sushma\KnockoutJs\Controller\Index;

use Magento\Framework\App\ActionInterface;

class Index implements ActionInterface{

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultFactory;

    /**
     * @param \Magento\Framework\View\Result\PageFactory $resultFactory;
     */

    public function __construct(\Magento\Framework\View\Result\PageFactory $resultFactory){
        $this->resultFactory = $resultFactory;
    }

    public function execute(){
        $page = $this->resultFactory->create();
        // $page->getConfig()->getTitle()->set("Dependency Injection in magento2");
        return $page;
    }
}