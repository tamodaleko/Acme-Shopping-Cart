<?php

declare(strict_types=1);

namespace Tamodaleko\AcmeCart;

use Tamodaleko\AcmeCart\Contracts\Delivery;

class SampleDelivery implements Delivery
{
    private const LOW_LIMIT = 50;
    private const HIGH_LIMIT = 90;

    private const LOW_LIMIT_PRICE = 4.95;
    private const HIGH_LIMIT_PRICE = 2.95;

    public function calculate(float $total): float
    {
        if ($total >= self::HIGH_LIMIT) {
            return 0;
        }

        if ($total >= self::LOW_LIMIT) {
            return self::HIGH_LIMIT_PRICE;
        }

        return self::LOW_LIMIT_PRICE;
    }
}
