<?php

declare(strict_types=1);

namespace Tamodaleko\AcmeCart;

use Tamodaleko\AcmeCart\Contracts\Offer;

class SampleOffer implements Offer
{
    private const PRODUCT_CODE = 'R01';
    
    public function apply(array $products): array
    {
        $response = [];
        $found = false;

        foreach ($products as $product) {
            if ($product->code === self::PRODUCT_CODE) {
                if ($found) {
                    $clone = clone $product;
                    $clone->price = $product->price / 2;

                    $response[] = $clone;
                    
                    $found = false;
                    continue;
                }

                $found = true;
            }

            $response[] = $product;
        }

        return $response;
    }
}
