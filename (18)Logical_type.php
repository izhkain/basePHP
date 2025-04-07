<?php

// Логический тип

// Напишите функцию isPensioner(), которая принимает возраст в качестве единственного аргумента и проверяет, является ли этот возраст пенсионным. Пенсионным считается возраст 60 лет и больше.

function isPensioner($age)
{
    return $age >= 60;
}

var_dump(isPensioner(60));
echo "\n";


// Предикаты
// Напишите функцию isMister(), которая принимает строку и проверяет, является ли она словом 'Mister'.

function isMister(string $text)
{
    return $text === 'Mister';
}

var_dump(isMister('Mister'));
echo "\n";

// Комбинирование операций и функций
// Реализуйте функцию isInternationalPhone(), которая проверяет формат указанного телефона. Если телефон начинается с +, значит это международный формат.

function isInternationalPhone(string $number)
{
    return $number[0] === '+';
}

var_dump(isInternationalPhone('+'));
echo "\n";

// Логические операторы

// Реализуйте функцию isLeapYear(), которая определяет, является ли год високосным или нет. Год будет високосным, если он кратен (то есть делится без остатка) 400 или он одновременно кратен 4 и не кратен 100. Как видите, в определении уже заложена вся необходимая логика, осталось только переложить её на код:

function isLeapYear(int $year): bool
{
    return ($year % 400 === 0) || ($year % 4 === 0 && $year % 100 !== 0);
}

var_dump(isLeapYear(2018));
var_dump(isLeapYear(2017));
var_dump(isLeapYear(2016));
echo "\n";

// Отрицание
/* В этом уроке вам нужно будет реализовать две функции isPalindrome() и isNotPalindrome()

Функция isPalindrome() определяет, является ли слово палиндромом или нет. Палиндром это слово, которое читается одинаково в обоих направлениях.

isPalindrome('wow'); // true
isPalindrome('mom'); // true
isPalindrome('hexlet'); // false

// Слова в функцию могут быть переданы в любом регистре
// Поэтому сначала нужно привести слово в нижний регистр strtolower()
isPalindrome('Wow'); // true
Для того чтобы развернуть слово задом наперёд используйте функцию strrev().

Функция isNotPalindrome() проверяет что слово НЕ является палиндромом:

isNotPalindrome('wow'); // false
isNotPalindrome('mom'); // false
isNotPalindrome('hexlet'); // true
Для этого, вызовите функцию isPalindrome() внутри isNotPalindrome() и примените отрицание. */


function isPalindrome(string $word): bool
{
    $lowerCaseWord = strtolower($word);
    return $lowerCaseWord === strrev($lowerCaseWord);
}

var_dump(isPalindrome('wow'));
var_dump(isPalindrome('mom'));
var_dump(isPalindrome('hexlet'));
echo "\n";

function isNotPalindrome(string $word): bool
{
    return !isPalindrome($word);
}

var_dump(isNotPalindrome('wow'));
var_dump(isNotPalindrome('mom'));
var_dump(isNotPalindrome('hexlet'));
echo "\n";

// Логические операторы 2
/* Напишите функцию на php isNeutralSoldier(), которая принимает на вход два аргумента:

Цвет доспехов (строка). Возможные варианты: red, yellow, black.
Цвет щита (строка). Возможные варианты: red, yellow, black.
Функция возвращает true если цвет доспехов не красный и цвет щита чёрный. В остальных случаях возвращает false. */


function isNeutralSoldier(string $armorColor, string $shieldColor)
{
    return $armorColor !== 'red' && $shieldColor === 'black';
}

var_dump(isNeutralSoldier('yellow', 'black')); // true
var_dump(isNeutralSoldier('red', 'black'));    // false
var_dump(isNeutralSoldier('red', 'red'));      // false
echo "\n";

// Слабая типизация - 2

// Напишите функцию isFalsy(), которая проверяет, трактуется ли переданное значение как ложное с точки зрения PHP. Для выполнения этой проверки вам понадобится сравнить false с переданным значением, используя ==.

function isFalsy($value): bool
{
    return $value == false;
}
var_dump(isFalsy(false));  // true
var_dump(isFalsy(0));      // true
var_dump(isFalsy('help')); // false
var_dump(isFalsy(10));     // false
