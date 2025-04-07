<?php

// Синтаксический сахар

// Реализуйте функцию filterString(), принимающую на вход строку и символ, и возвращающую новую строку, в которой удален переданный символ во всех его позициях.

function filterString($str, $char)
{
    $result = '';
    $i = 0;
    $length = strlen($str);

    while ($i < $length) {
        if ($str[$i] !== $char) {
            $result .= $str[$i];
        }
        $i++;
    }

    return $result;
}


$str = 'If I look back I am lost';
print_r(filterString($str, 'o')); // 'If I lk back I am lst'
echo "\n";
print_r(filterString($str, 'I')); // 'f  look back  am lost'
echo "\n";

// Инкремент и декремент

// Напишите функцию makeItFunny(), которая принимает на вход строку и возвращает её копию, у которой каждый n-ный элемент переведен в верхний регистр. n – задается на входе в функцию. Для определения каждого n-ного элемента понадобится остаток от деления %. Подумайте, как его можно использовать.

function makeItFunny($str, $n)
{
    $result = '';
    $i = 0;
    $length = strlen($str);

    while ($i < $length) {
        // Если позиция символа кратна n (с учетом что индексы начинаются с 0)
        if (($i + 1) % $n === 0) {
            $result .= strtoupper($str[$i]);
        } else {
            $result .= $str[$i];
        }
        $i++;
    }

    return $result;
}

$text = 'I never look back';
// Каждый третий элемент
print_r(makeItFunny($text, 3)); // 'I NevEr LooK bAck'
echo "\n";


// Возврат из циклов

/* Реализуйте функцию hasChar(), которая проверяет, содержит ли строка букву в указанном регистре. Функция принимает два параметра:
Строка
Буква для поиска */

function hasChar($str, $char)
{
    $i = 0;
    while ($i < strlen($str)) {
        if ($str[$i] === $char) {
            return true;
        }
        $i++;
    }
    return false;
}


var_dump(hasChar('Hexlet', 'H')); // true
var_dump(hasChar('Hexlet', 'h')); // false
var_dump(hasChar('Awesomeness', 'm')); // true
var_dump(hasChar('Awesomeness', 'd')); // false