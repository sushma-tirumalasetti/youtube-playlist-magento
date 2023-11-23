<?php
declare(strict_types=1);
namespace Sushma\Training\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\RawFactory;

class Index implements ActionInterface{
    /**
     * @var RawFactory
     */
    protected $resultFactory;

    /**
     * Index Constructor 
     * 
     * @param RawFactory $resultFactory;
     */

    public function __construct(RawFactory $resultFactory){
        $this->resultFactory = $resultFactory;
    }
    public function execute(){  
        return $this->resultFactory->create()->setContents("Example ");
    }
}