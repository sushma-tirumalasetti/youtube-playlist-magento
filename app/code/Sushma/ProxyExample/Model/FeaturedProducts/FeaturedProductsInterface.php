<?php
declare(strict_types= 1);

namespace Sushma\ProxyExample\Model\FeaturedProducts;
interface FeaturedProductsInterface{
    public function getFeaturedProducts(): array;
    public function count() : int;
}