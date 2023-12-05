<?php
declare (strict_types=1);

namespace Sushma\PageTitleExample\Controller\Index;

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
        $result =  $this->resultFactory->create();
        $result->getConfig()->getTitle()->set("Page Title Example");
        // $result->getLayout()->getBlock('page.main.title')->setPageTitle("Magento 2 training title  set from the controller");
        return $result;
    }
}   