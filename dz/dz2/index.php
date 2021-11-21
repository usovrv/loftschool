<?php
require 'scr/functions.php';

echo '<p><b>ЗАДАНИЕ 1</b></p>';
$result = task1(['PHP', 'CSS', 'JS']);
echo $result . "<br>\n";

echo "<p><b>ЗАДАНИЕ 2</b></p>";
task2('*', 3, 2, 2);

echo "<p><b>ЗАДАНИЕ 3</b></p>";
task3(8,8);

echo "<p><b>ЗАДАНИЕ 4</b></p>";
task4();

echo "<p><b>ЗАДАНИЕ 5</b></p>";
task5('Карл у КлАры УкраЛ Кораллы', 'Две бутылки лимонада');

echo "<p><b>ЗАДАНИЕ 6</b></p>";
$readFile = task6('test.txt', 'Hello again!');
echo $readFile;