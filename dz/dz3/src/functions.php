<?php
const NAMES = [
    'Роман',
    'Дмитрий',
    'Вадим',
    'Аркадий',
    'Ирина',
    'Ольга',
    'Александра',
    'Павел'
];

function dump($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

function createUser()
{
    $user = [
        'name' => NAMES[array_rand(NAMES)],
        'age' => mt_rand(18,45)
    ];

    return $user;
}