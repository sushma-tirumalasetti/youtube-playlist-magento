<?php
declare (strict_types=1);

namespace Sushma\ProxyExample\Model\FeaturedProducts;
use Sushma\ProxyExample\Model\FeaturedProducts\FeaturedProductsInterface;

class FeaturedProductsBySales implements FeaturedProductsInterface{
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
            'Sales_1',
            'Sales_2',
            'Sales_3',
            'Sales_4',
            'Sales_5',
            'Sales_6',
        ];
    }
}