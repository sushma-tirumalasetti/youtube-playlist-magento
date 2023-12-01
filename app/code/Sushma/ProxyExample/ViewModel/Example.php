<?php
declare (strict_types=1);
namespace Sushma\ProxyExample\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Sushma\ProxyExample\Model\FeaturedProducts;

class Example implements ArgumentInterface{
    protected FeaturedProducts $featuredProducts;
    public function __construct(FeaturedProducts $featuredProducts){
        $this->featuredProducts = $featuredProducts;
    }
    public function getFeaturedProducts() : array{

        return $this->featuredProducts->getFeaturedProducts();
    }
}