<?php

$students = [
    'ИТ20' => [
        'Николаев Илья' => 4,
        'Королева Елизавета' => 3,
        'Миронова Ярослава' => 3,
        'Савина Валерия' => 5,
        'Артамонов Александр' => 5,
        'Петрова Милана' => 4,
        'Баранов Глеб' => 2,
        'Бобров Егор' => 4,
        'Егорова Дарья' => 4,
        'Калугин Даниил' => 2,
    ],
    'БАП20' => [
        'Денисов Роман' => 3,
        'Зыкова Екатерина' => 5,
        'Комиссаров Михаил' => 4,
        'Носкова Юлия' => 4,
        'Соколов Мирон' => 4,
        'Воробьева Екатерина' => 4,
        'Матвеева Анастасия' => 5,
        'Самойлова Дарья' => 3,
        'Власов Артём' => 2,
        'Соловьев Тимофей' => 3,
    ]
];


$averageRating = [];
    foreach($students as $group => $student) {
        $zero = 0;
        foreach($student as $mark) {
            $zero += $mark;
        }
        $averageRating[$group] = $zero;
    }


$expulsion = [];

foreach ($students as $group => $student) {
    $losers = [];
    foreach ($student as $classman => $mark) {
        if ($mark < 3) {
            $losers[] = $classman;
        }
    }
    $expulsion[$group] = $losers;
}

echo sprintf("Группа с самым большим вычисленным значением успеваемости: %s%s", array_key_first($averageRating), PHP_EOL);
echo ("Студенты в списке на отчисление: ");
print_r($expulsion);







