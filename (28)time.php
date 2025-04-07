<?php

// Время

// Допишите реализацию функции getYear(), которая возвращает год переданного timestamp:

const SECONDS_IN_YEAR = 60 * 60 * 24 * 365;

function getYear($timestamp)
{
    return (int) floor(1970 + $timestamp / SECONDS_IN_YEAR);
}

print_r(getYear(1532435204)); // 2018
echo "\n";


// Date

// Допишите реализацию функции getCustomDate(), которая возвращает дату в формате 15/03/1985 на основе переданного timestamp.

function getCustomDate(int $timestamp): string
{
    return date('d/m/Y', $timestamp);
}

print_r(getCustomDate(1532435204));
echo "\n";
print_r(getCustomDate(532435204));
echo "\n";
print_r(getCustomDate(5324352));
echo "\n";

// Реализуйте функцию getHexletBirthday(), которая возвращает дату основания Хекслета в виде timestamp. Хекслет был основан 01.01.2012.

function getHexletBirthday()
{
    return mktime(0, 0, 0, 1, 1, 2012);
}

print_r(getHexletBirthday());
echo "\n";

// Часовые пояса (тайм зоны)

// Выведите на экран текущий часовой пояс.

echo (date_default_timezone_get());
