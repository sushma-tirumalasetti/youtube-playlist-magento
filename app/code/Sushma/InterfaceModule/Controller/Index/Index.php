<?php
declare (strict_types=1);
namespace Sushma\InterfaceModule\Controller\Index;

use Magento\Framework\App\ActionInterface;
class Index implements ActionInterface{

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
        $page->getConfig()->getTitle()->set("Contructors with interfaces in magento");
        return $page;
    }
}