<?php

declare (strict_types= 1);

namespace Sushma\ProxyExample\Model\FeaturedProducts;

class FeatureByCategory implements FeaturedProductsInterface{
    protected array $featuredProducts=[];
    public function __construct(){
        $this->LoadFeaturedProducts();
    }
    public function getFeaturedProducts(): array{
        return $this->featuredProducts;
    }
    public function count() : int{
        return count($this->featuredProducts);
    }

    protected function LoadFeaturedProducts():void{
        $this->featuredProducts=[
            'product_1',
            'product_2',
            'product_3',
            'product_4',
            'product_5',
            // 'product_6',
        ];
    }

}