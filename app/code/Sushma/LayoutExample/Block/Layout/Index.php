<?php
declare(strict_types=1);

namespace Sushma\LayoutExample\Block\Layout;

use Magento\Framework\View\Element\Template;


class Index extends Template{
    protected function  _prepareLayout(){
        parent::_prepareLayout();
        $pageMainTitle = $this->getLayout()->getBlock('page.main.title');
        if ($pageMainTitle) {
                $pageMainTitle->setPageTitle('magento Developer');
        }
        return $this;
    }

    public function getSubTitle():String{
        return "Learn Magento2 Developement";
    }
}