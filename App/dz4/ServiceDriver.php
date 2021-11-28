<?php

namespace App\dz4;

use App\dz4\TariffInterface;

class ServiceDriver implements \App\dz4\ServiceInterface
{
    private $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function apply(TariffInterface $tariff, &$price)
    {
        $price += $this->price;
    }
}