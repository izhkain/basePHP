<?php

// Цикл For

// Реализуйте функцию sumOfSeries(), которая считает сумму ряда целых чисел. Ряд задаётся двумя числами — начальным и конечным. Функция принимает два аргумента-числа и возвращает сумму ряда. Например, для аргументов 4 и 7 сумма будет 4 + 5 + 6 + 7 = 22.

function sumOfSeries($start, $end)
{
    $sum = 0;

    for ($i = $start; $i <= $end; $i++) {
        $sum += $i;
    }

    return $sum;
}

print_r(sumOfSeries(1, 2)); // 3
echo "\n";
print_r(sumOfSeries(1, 3)); // 6
echo "\n";
print_r(sumOfSeries(4, 7)); // 22