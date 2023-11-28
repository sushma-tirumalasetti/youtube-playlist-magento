<?php
declare (strict_types=1);
namespace Sushma\HeaderFooterScript\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface{
    protected $pageFactory;
    public function __construct(PageFactory $pageFactory){
        $this->pageFactory = $pageFactory;
    }
    public function execute(){
        return $this->pageFactory->create();
    }

}