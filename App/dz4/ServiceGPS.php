<?php

namespace App\dz4;

use App\dz4\TariffInterface;

class ServiceGPS implements \App\dz4\ServiceInterface
{
    private $pricePerHour;

    public function __construct(int $pricePerHour)
    {
        $this->pricePerHour = $pricePerHour;
    }

    public function apply(TariffInterface $tariff, &$price)
    {
        $hours = ceil($tariff->getMinutes() / 60);
        $price += $this->pricePerHour * $hours;
    }
}