<?php
declare(strict_types=1);
namespace Sushma\WidgetExample\Controller\Index;

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
            return $this->pageFactory->create();
        }

    
}