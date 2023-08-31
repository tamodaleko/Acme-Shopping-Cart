<?php

declare(strict_types=1);

namespace Tamodaleko\AcmeCart\Contracts;

interface Offer
{
    public function apply(array $products);
}
