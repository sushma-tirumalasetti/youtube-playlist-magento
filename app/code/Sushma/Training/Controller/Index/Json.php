<?php
declare (strict_types =1);

namespace Sushma\Training\Controller\Index;

use Magento\Framework\App\ActionInterface;
class Json implements ActionInterface{

    /**
     * @var \\Magento\Framework\Controller\Result\JsonFactory
     */
    protected $jsonFactory;

    /**
     * @param \\Magento\Framework\Controller\Result\JsonFactory $jsonFactory $jsonFactory
     */

    public function __construct(\Magento\Framework\Controller\Result\JsonFactory $jsonFactory){
        $this->jsonFactory = $jsonFactory;

    }

    public function execute(){
        return $this->jsonFactory->create()
        ->setHeader('content-type',"application/json")
        ->setData([
            'name' => "sushma",
            "job" => "Magento Developer"
        ]);
    }
}