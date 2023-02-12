<?php

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

//$isArray = array_map(function (int $num): string {
//    return $num&1 ? "$num нечетное" : "$num четное";
//}, $arr);
//
//print_r($isArray);

$isArray = array_map(function (int $num) {
    return $num % 2 === 0 ? " $num четное" : " $num нечетное";
}, $arr);
print_r($isArray);





