<?php
ini_set('display_errors', 'on');
ini_set('error_reporting', E_NOTICE | E_ALL);

$_SERVER['DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT'] . '/loftschool.local/';
include $_SERVER['DOCUMENT_ROOT'] . 'vendor/autoload.php';

use App\dz4\TariffInterface;
use App\dz4\ServiceInterface;
use App\dz4\TariffAbstract;
use App\dz4\TariffBasic;
use App\dz4\ServiceGPS;
use App\dz4\ServiceDriver;
use App\dz4\TariffHour;

$tarif = (new TariffHour(5,59))->countPrice();
echo 'Тариф без услуг: ' . $tarif . '<br>';

$tarifAddGps = (new TariffHour(5,59))->addService(new ServiceGPS(15))->countPrice();
echo 'Тариф с дополнительной услугой GPS: ' . $tarifAddGps . '<br>';

$tarifAddDriver = (new TariffHour(5,59))->addService(new ServiceDriver(100))->countPrice();
echo 'Тариф с дополнительной услугой водитель: ' . $tarifAddDriver . '<br>';