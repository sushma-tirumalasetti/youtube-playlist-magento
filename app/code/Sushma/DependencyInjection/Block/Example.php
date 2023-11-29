<?php
declare (strict_types=1);
namespace Sushma\DependencyInjection\Block;


use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Sushma\DependencyInjection\Model\Main;

class Example extends Template{
    public function __construct(Context $context,Main $main, array $data=[]){
        parent::__construct($context,$data);
        $this->main =$main;
    }
    public function getMain():Main{
        return $this->main;
    }
}
