<?php

$arr1 = ['счастья', 'здоровья', 'успехов', 'богатсва', 'благополучия', 'везения', 'настроения'];
$arr2 = ['бесконечного', 'крепкого', 'умопомрачительного', 'неземного', 'хорошего'];

$name = readline("Введите имя именниника ");

if ($name !== '') {
    for ($i=0; $i<3; $i++) {
        $congratulation[] = $arr2[array_rand($arr2, 1)] . " " . $arr1[array_rand($arr1, 1)];
    }
    echo("Дорогой $name, от всего сердца поздравляю тебя с днем рождения, желаю: " . implode(", ",  $congratulation) . ".");
} else {
    echo("Имя не введенно");
};
