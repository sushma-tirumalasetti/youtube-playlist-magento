<?php
declare (strict_types=1);
namespace Sushma\DependencyInjection\Model;

use Sushma\DependencyInjection\Model\Injectible;
use Sushma\DependencyInjection\Model\NonInjectible;
use Sushma\DependencyInjection\Model\AbstractUtil;
use Sushma\DependencyInjection\Model\HeavyOperation;
use Sushma\DependencyInjection\Model\VirtualType\DefaultName;
use Sushma\DependencyInjection\Model\Optional;
use Sushma\DependencyInjection\Model\MethodInjection;
use Magento\Framework\DataObject;


class Main{
    protected array $data;
    protected Injectible $injectible;
    protected NonInjectibleInterfaceFactory $nonInjectibleFactory;
    protected AbstractUtil $util;
    protected DefaultName $defaultName;
    protected HeavyOperation $heavyOperation;
    protected Optional $optional;
    protected MethodInjection $methodInjection;

    // protected DataObject $dataObject;
    public function __construct(
        InjectibleInterface $injectible,
        NonInjectibleInterfaceFactory $nonInjectibleFactory,
        AbstractUtil $util,
        DefaultName $defaultName,
        HeavyOperation $heavyOperation,
        MethodInjection $methodInjection,
        Optional $optional = null,
        array $data=[]){
            $this->data=$data;
            $this->injectible=$injectible;
            $this->nonInjectibleFactory = $nonInjectibleFactory;   
            $this->util = $util; 
            $this->heavyOperation =$heavyOperation;
            $this->defaultName=$defaultName;
            $this->methodInjection=$methodInjection;
            $this->optional=$optional;
        }
    public function getId():String{
        return $this->data['id'];
    }
    public function getInjectible():Injectible{
        return $this->injectible;
    }
    public function getNonInjectible():NonInjectible{
        return $this->nonInjectibleFactory->create();
    }
    
    public function getUtil():AbstractUtil{
        return $this->util;
    }
    public function getHeavyOperation(): HeavyOperation{
        return $this->heavyOperation;
    }
    public function getDefaultName():DefaultName{
        return $this->defaultName;
    }

    public function getOptional():Optional{
        return $this->optional;
    }
    public function getMethodInjectionName():string{
        $dataObject = new DataObject(["name"=>"Method Injection"]);
        return $this->methodInjection->getName($dataObject);
    }
}
