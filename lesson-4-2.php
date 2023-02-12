<?php

$arr = range(4.8, 84.8);

function getMathArray(array $arr): array
{
    $avg = (float) array_sum($arr) / count($arr);
    return ['max' => max($arr), 'min' => min($arr), 'avg' => $avg];
}

$array = getMathArray($arr);
print_r($array);