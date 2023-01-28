<?php
//echo ('Hello world');
$name = readline('Введите Ваше имя') . PHP_EOL;
//$age = readline('Введите Ваш возраст') . PHP_EOL;
//echo("Ваше имя: $name Ваш возраст: $age лет.");
$taskOne = readline('Какая задача стоит перед вами сегодня?');
$numberOne = readline('Сколько примерно часов эта задача займет?');
$taskTwo = readline('Какая задача стоит перед вами сегодня?');
$numberTwo = readline('Сколько примерно часов эта задача займет?');
$taskThree = readline('Какая задача стоит перед вами сегодня?');
$numberThree = readline('Сколько примерно часов эта задача займет?');
$result = ($numberOne + $numberTwo + $numberThree);
echo("$name, сегодня у вас запланировано 3 приоритетных задачи на день:" . PHP_EOL .
"$taskOne ($numberOne ч.)" . PHP_EOL . "$taskTwo ($numberTwo ч.)" . PHP_EOL . "$taskThree ($numberThree ч.)" . PHP_EOL .
    "Примерное время выполнения плана = $result ч."
);





