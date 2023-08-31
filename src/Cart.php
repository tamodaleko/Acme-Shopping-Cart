<?php

declare(strict_types=1);

namespace Tamodaleko\AcmeCart;

use Tamodaleko\AcmeCart\Contracts\Delivery;
use Tamodaleko\AcmeCart\Contracts\Offer;

class Cart
{
    protected array $products = [];
    
    public function __construct(
        protected Delivery $delivery,
        protected Offer $offer
    ) {}
    
    public function add(Product $product): void
    {
        $this->products[] = $product;
    }

    public function total(): float
    {
        $products = $this->offer->apply($this->products);

        $total = array_sum(array_map(function($product) {
            return $product->price;
        }, $products));

        return (float) number_format($total + $this->delivery->calculate($total), 2);
    }
}
