<?php
$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'
];

$toyota = [
    'model' => 'Camry',
    'speed' => 270,
    'doors' => 5,
    'year' => '2021'
];

$opel = [
    'model' => 'Astra GT',
    'speed' => 200,
    'doors' => 4,
    'year' => '2016'
];

$cars = [];
$cars['bmw'] = $bmw;
$cars['toyota'] = $toyota;
$cars['opel'] = $opel;

foreach ($cars as $key => $value) {
    echo "CAR $key <br>";
    foreach ($value as $v) {
        echo $v . ' ';
    }
    echo '<br><br>';
}
