<?php

namespace App\dz4;

interface ServiceInterface
{
    public function apply(TariffInterface $tariff, &$price);
}