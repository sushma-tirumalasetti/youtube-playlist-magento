<?php
declare (strict_types=1);

namespace Sushma\LayoutExample\Controller\Layout;

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
        // $result->getConfig()->getTitle()->set("sushma");
        // $result->getLayout()->getBlock('page.main.title')->setPageTitle("Magento developer");
        return $result;
    }
}   