<?php

declare(strict_types=1);

namespace Tamodaleko\AcmeCart\Contracts;

interface Delivery
{
    public function calculate(float $total);
}
