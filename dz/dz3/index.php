<?php
require_once 'src/functions.php';

for ($i = 0; $i < 50; ++$i) {
    $users[] = createUser();
}

file_put_contents('users.json',json_encode($users));

//dump($users);

$data = file_get_contents('users.json');
$usersDecode = json_decode($data,true);

//dump($usersDecode);

$names = [];
$middleAge = 0;
foreach ($usersDecode as $user) {
    if ($names[$user['name']]) {
        ++$names[$user['name']];
    } else {
        $names[$user['name']] = 1;
    }
    $middleAge += $user['age'];
}
$middleAge = (int) ($middleAge / sizeof($usersDecode));
dump($names);

echo 'Средний возраст ' . $middleAge;
