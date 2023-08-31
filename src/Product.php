<?php

declare(strict_types=1);

namespace Tamodaleko\AcmeCart;

class Product
{
    public function __construct(
        public string $name,
        public string $code,
        public float $price
    ) {}
}
