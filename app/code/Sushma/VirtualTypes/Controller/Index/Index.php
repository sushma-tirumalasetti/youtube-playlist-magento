<?php
declare(strict_types=1);
namespace Sushma\VirtualTypes\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;
class Index implements ActionInterface
{
        /**
         * @var \Magento\Framework\View\Result\PageFactory;
         */
        protected $pageFactory;
        public function __construct(PageFactory $pageFactory){
            $this->pageFactory = $pageFactory;
        }

        public function execute(){
            $page= $this->pageFactory->create();
            $page->getConfig()->getTitle()->set("Virtual types in magento2");
            return $page;
        }
}