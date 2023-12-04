<?php
declare (strict_types= 1);
namespace Sushma\DispatchEventExample\Block;
use Magento\Framework\View\Element\Template;

class Example extends Template{
    public function toHtml() :string{
        return  "This is example from the dispatch event";
    }
}


