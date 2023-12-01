<?php

declare (strict_types= 1);
namespace Sushma\ProxyExample\Model;

use Sushma\ProxyExample\Model\FeaturedProducts\FeatureByCategory;
use Sushma\ProxyExample\Model\FeaturedProducts\FeaturedProductsBySales;

class FeaturedProducts{

    protected FeaturedProductsBySales $sales;
    protected FeatureByCategory $category;

    public function __construct(FeatureByCategory $category, FeaturedProductsBySales $sales){
        $this->category = $category;
        $this->sales = $sales;

    }
    public function getFeaturedProducts(): array{
        if($this->category->count()<6){
            return $this->sales->getFeaturedProducts();
        }
        return $this->category->getFeaturedProducts();
    }
}