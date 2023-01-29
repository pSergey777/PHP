<?php
Задание 1:
while(true) {
    $question = (int)readline("В каком году произошло крещение Руси?" . PHP_EOL .
        "1) 810 " . PHP_EOL .
        "2) 988 " . PHP_EOL .
        "3) 740 " . PHP_EOL);
    if ($question === 810) {
        echo 'Неверно';
        break;
    }
    if ($question === 988) {
        echo 'Ответ верный';
        break;
    }
    if ($question === 740) {
        echo 'Неверно';
        break;
    }
}

//Задание 2:
//function get_task()
//{
//    $name = readline('Введите Ваше имя');
//    $count = readline('Сколько задач у вас запланировано?');
//    $allTask = '';
//    $allTime = 0;
//    for ($i = 1; $i <= $count; $i++) {
//        ${"task${i}"} = (string) readline('Какая задача стоит перед вами?');
//        ${"time${i}"} = (int) readline('Сколько по времени это займет?');
//        $allTime += ${"time${i}"};
//        $allTask = $allTask . ${"task${i}"} . " (" . ${"time${i}"} . "ч)\n";
//    }
//    echo "$name, сегодня у вас запланировано" . " ${count} приоритетные задачи на день:
//    \n" . $allTask . "\nПримерное  время выполнения плана = $allTime" . "ч)
//    \n";
//}
//echo get_task();


////Задание 3:
//while (true) {
//    $num = (int)readline("Введите число:");
//    if ($num > 0) {
//        switch ($num % 8) {
//            case 1:
//            case 9:
//                echo 'Большой';
//                break;
//            case 2:
//            case 8:
//                echo 'Указательный';
//                break;
//            case 3:
//            case 7:
//                echo 'Средний';
//                break;
//            case 4:
//            case 6:
//                echo 'Безымянный';
//                break;
//            case 5:
//                echo 'Мизинец';
//                break;
//        }
//        break;
//    } else {
//        echo 'Неверное значение' . PHP_EOL;
//    }
//}
//
