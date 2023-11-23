<?php
declare (strict_types = 1);
namespace Sushma\Training\Controller\Index;

use Magento\Framework\App\ActionInterface;

class Redirect implements ActionInterface{

    /**
     * @var Magento\Framework\Controller\Result\RedirectFactory;
     */
    protected $redirectFactory;

    /**
     * @param \Magneto\Framework\Controller\Result\RedirectFactory $redirectFactory;
     */


    public function __construct(\Magento\Framework\Controller\Result\RedirectFactory $redirectFactory){
        $this->redirectFactory = $redirectFactory;
    }

    public function execute(){
        return $this->redirectFactory->create()->setUrl("/example/index/page");
    }
}