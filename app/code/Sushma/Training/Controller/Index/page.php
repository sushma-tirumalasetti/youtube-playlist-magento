<?php
declare (strict_type=1);
namespace Sushma\Training\Controller\Index;

use Magento\Framework\App\ActionInterface;
class Page implements ActionInterface{

    /**
     * @var \Magneto\Framework\View\Result\PageFactory
     */
    protected $pageFactory;

    /**
     * @param \Magento\Framework\View\Result\PageFactory $pageFactory
     */

    public function __construct(\Magento\Framework\View\Result\PageFactory $pageFactory){
        $this->pageFactory = $pageFactory;
    }
    public function execute(){
        $page =  $this->pageFactory->create();
        $page->getConfig()->getTitle()->set("Example");
        return $page;
    }
}