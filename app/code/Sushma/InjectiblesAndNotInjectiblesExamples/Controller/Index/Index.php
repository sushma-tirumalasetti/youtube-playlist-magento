<?php
declare(strict_types=1);
namespace Sushma\InjectiblesAndNotInjectiblesExamples\Controller\Index;

use Magento\Framework\App\ActionInterface;

class Index implements ActionInterface
{
        /**
         * @var \Magento\Framework\View\Result\PageFactory;
         */
        protected $pageFactory;
        public function __construct(\Magento\Framework\View\Result\PageFactory $pageFactory){
            $this->pageFactory = $pageFactory;
        }

        public function execute(){
            $resultPage =  $this->pageFactory->create();
            $resultPage->getConfig()->getTitle()->set("Injectibles and Non Injectibles Examples");
            return $resultPage;
        }    
}
