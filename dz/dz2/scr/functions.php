<?php
function dump($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

// Задание 1
/**
 * Принимает массив строк и выводить каждую строку в отдельном параграфе,
 * eсли в функцию передан второй параметр true, то возвращает  результат в виде одной объединенной строки.
 *
 * @param array $text
 * @param true $concat
 * @return string
 */
function task1($text, $concat = false)
{
    if (!is_array($text)) {
        return 'false';
    }
    foreach ($text as $stroka) {
        if (gettype($stroka) <> 'string') {
            return false;
        }
    }

    if ($concat) {
        return implode(' ', $text);
    } else {
        foreach ($text as $stroka) {
            echo "<p>$stroka</p>";
        }
    }
}

// Задание 2
/**
 * Принимает переменное число аргументов. Первым аргументом обязательно должна быть строка,
 * обозначающая арифметическое действие, которое необходимо выполнить со всеми передаваемыми аргументами.
 * Остальные аргументы это целые и/или вещественные числа.
 *
 * @return false|void
 */
function task2()
{
    $args = func_get_args();
    $operation = array_shift($args);
    if (!is_string($operation) || (strlen($operation) > 1) || (strpos('+-*/', $operation) == false)) {
        echo "Арифметическое действие не определено.";
        return false;
    }
    foreach ($args as $num) {
        if (is_string($num)) {
            echo "Второй и последующий аргумент функции должны быть цифрами.";
            return false;
        }
    }
    $result = $args[0];
    for ($i = 1; $i < count($args); $i++) {
        switch ($operation) {
            case '+':
                $result += $args[$i];
                break;
            case '-':
                $result -= $args[$i];
                break;
            case '*':
                $result *= $args[$i];
                break;
            case '/':
                // Проверка деления на 0
                $divider = false;
                if ($args[$i] == 0) {
                    $divider = true;
                } else {
                    $result /= $args[$i];
                }
                if ($divider) {
                    echo 'Ошибка: деление на ноль<br>';
                    return false;
                }
                break;
        }
    }
    echo 'Ответ: ' . $result . '<br>';
}

// Задание 3
function multiplication_table($rowCount, $colCount)
{
    if ($rowCount < 1 || $colCount < 1) {
        return;
    } else {
        echo '<table class="multiplication_table">';
        for ($i = 1; $i <= $rowCount; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= $colCount; $j++) {
                echo '<td>' . $i * $j . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        echo '<br><br>';

        multiplication_table(--$rowCount, --$colCount);
    }
}

/**
 * Если в функцию передали 2 целых числа, то функция должна отображает таблицу умножения размером со значения
 * параметров, переданных в функцию. (Например если передано 8 и 8, то выведит таблицу от 8х8 до 1х1)
 *
 * @param int $rowCount
 * @param int $colCount
 * @return void|null
 */
function task3($rowCount, $colCount)
{
    if (!is_int($rowCount) || !is_int($colCount)) {
        echo "<br>Входные параметры должны быть целыми числами<br>\n";
        return null;
    }

    echo '<style>.multiplication_table { border-collapse: collapse; text-align: center; }';
    echo '.multiplication_table td { border: 1px solid black; width: 26px;}';
    echo '</style>';

    multiplication_table($rowCount, $colCount);
}

// Задание 4
/**
 * Первой строкой выведит информацию о текущей дате в формате 31.12.2016 23:59
 * Второй строкой выведит unixtime время соответствующее текущий даты.
 */
function task4()
{
    echo date('d.m.Y h:i'), "<br>";
    echo strtotime(date('d.m.Y h:i'));
}

// Задание 5
/**
 * Примает два параметра: из первого удаляются все заглавные буквы, из второго подменяется часть строки
 * @param string $str1
 * @param string $str2
 */
function task5($str1, $str2)
{
    $charset = 'utf-8';
    $len = mb_strlen($str1, $charset);
    $letters = [];
    for ($i = 0; $i < $len; $i++) {
        $letter = mb_substr($str1, $i, 1, $charset); //получаю нужную част строки
        if (mb_strtolower($letter, $charset) !== $letter) //привожу к нижнему регистру и сравниваю с исходным вариантом
        {
            $letters[] = $letter;
        }
    }
    $newStr = $str1;
    foreach ($letters as $letter) {
        $newStr = str_replace($letter, '', $newStr);
    }
    echo "Было:<br><b> $str1</b><br>";
    echo "Стало:<br><b>$newStr</b><br>";

    $newStr = str_replace('Две', 'Три', $str2);
    echo "Было:<br><b>$str2</b><br>";
    echo "Стало:<br><b>$newStr</b>";
}

// Задание 6
/**
 * Принимает название файла с расширением, после чего создает его и записывает в него текст из второго параметра
 *
 * @param $fileName
 * @param $text
 * @return false|string
 */
function task6($fileName, $text)
{
    file_put_contents($fileName, $text);
    $readFile = file_get_contents($fileName);
    return $readFile;
}