<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Таблица умножения</title>
    <style>
        table {
            border: 1px solid #000;
            border-collapse: collapse;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
        }

        td {
            padding: 0;
            margin: 0;
            width: 50px;
            height: 50px;
            border: 1px solid #000;
            vertical-align: middle;
        }
        .bg {
            background: #ededed;
        }
    </style>
</head>
<body>
<table>
    <tbody>
    <tr class="bg">
        <td>#</td>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo '<td>' . $i . '</td>';
        }
        ?>
    </tr>

    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo '<tr>' . PHP_EOL;
        echo '<td class="bg">' . $i . '</td>';
        for ($j = 1; $j <= 10; $j++) {
            if (($i % 2 == 0) && ($j % 2 == 0)) {
                echo '<td>(' . $i * $j . ')</td>';
            } elseif (($i % 2 == 1) && ($j % 2 == 1)) {
                echo '<td>[' . $i * $j . ']</td>';
            } else {
                echo '<td>' . $i * $j . '</td>';
            }
        }
        echo '</tr>' . PHP_EOL;
    }
    ?>

    </tbody>
</table>
</body>
</html>