<?php

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];

$itemName = (string) readline("Введите название предмета с заглавной буквы: ");

function searchForItems(string $item, array $arr)
{
    foreach ($arr as $value) {
        if (is_array($value)) {
            if (searchForItems($item, $value)) {
                return searchForItems($item, $value);
            }
        } else {
            if ($item === $value) {
                return true;
            }
        }

    }
    return false;
}
$result = searchForItems($itemName, $box);
var_dump ($result);
