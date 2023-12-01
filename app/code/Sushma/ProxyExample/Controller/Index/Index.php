<?php
declare(strict_types=1);
namespace Sushma\ProxyExample\Controller\Index;

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
            $page->getConfig()->getTitle()->set("Pool Pattern in magento2");
            return $page;
        }
}
