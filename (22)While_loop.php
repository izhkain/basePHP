<?php

// Цикл While

// Модифицируйте функцию printNumbers() так, чтобы она выводила числа в обратном порядке. Для этого нужно идти от верхней границы к нижней. То есть, счетчик должен быть инициализирован максимальным значением, а в теле цикла его нужно уменьшать до нижней границы.

function printNumbers($firstNumber)
{
    $i = $firstNumber;
    while ($i >= 1) {
        print_r("{$i}\n");
        $i--;
    }
    return 'finished!';
}
print_r(printNumbers(4));
echo "\n";

// Агрегация данных (Числа)

// Реализуйте функцию multiplyNumbersFromRange(), которая перемножает числа в указанном диапазоне включая границы диапазона. Пример вызова:

function multiplyNumbersFromRange($start, $finish)
{
    $result = 1;
    $i = $start;
    while ($i <= $finish) {
        $result *= $i;
        $i++;
    }

    return $result;
}

print_r(multiplyNumbersFromRange(1, 5));
echo "\n";
print_r(multiplyNumbersFromRange(2, 3));
echo "\n";
print_r(multiplyNumbersFromRange(6, 6));
echo "\n";

// Агрегация данных (Строки)

// Реализуйте функцию joinNumbersFromRange(), которая объединяет все числа из диапазона в строку:


function joinNumbersFromRange($start, $end)
{
    $result = '';
    $i = $start;

    while ($i <= $end) {
        $result .= $i;
        $i++;
    }

    return $result;
}


print_r(joinNumbersFromRange(1, 1)); // '1'
echo "\n";
print_r(joinNumbersFromRange(2, 3)); // '23'
echo "\n";
print_r(joinNumbersFromRange(5, 10)); // '5678910'
echo "\n";
echo "\n";


// Обход строк

// Реализуйте функцию printReversedWordBySymbol(), которая печатает переданное слово посимвольно, как в примере из теории, но делает это в обратном порядке. $word = 'Hexlet';

function printReversedWordBySymbol($word)
{
    $length = strlen($word);
    $i = $length - 1; // Начинаем с последнего символа

    while ($i >= 0) {
        echo $word[$i] . "\n";
        $i--;
    }
}

print_r(printReversedWordBySymbol('Hexlet'));
echo "\n";

// Условия внутри тела цикла

// Функция из теории учитывает регистр букв. То есть A и a с её точки зрения разные символы. Реализуйте вариант этой же функции, так чтобы регистр букв был не важен:


function countChars($word, $char)
{
    // Приводим все к нижнему регистру
    $lowerWord = strtolower($word);
    $lowerChar = strtolower($char);

    $count = 0;
    $i = 0;
    $length = strlen($lowerWord);

    while ($i < $length) {
        if ($lowerWord[$i] === $lowerChar) {
            $count++;
        }
        $i++;
    }

    return $count;
}

print_r(countChars('HexlEt', 'e'));
echo "\n";
print_r(countChars('HexlEt', 'E'));
echo "\n";


// Формирование строк в циклах

// Реализуйте функцию mysubstr(), которая извлекает из строки подстроку указанной длины. Она принимает на вход два аргумента (строку и длину) и возвращает подстроку начиная с первого символа:


function mysubstr($str, $length)
{
    $result = '';
    $i = 0;

    while ($i < $length && $i < strlen($str)) {
        $result .= $str[$i];
        $i++;
    }

    return $result;
}


$str = 'If I look back I am lost';
print_r(mysubstr($str, 1)); // 'I'
echo "\n";
print_r(mysubstr($str, 7)); // 'If I lo'
echo "\n";


// Пограничные случаи

/* Реализуйте функцию-предикат isArgumentsForSubstrCorrect, которая принимает три аргумента:

строку
индекс, с которого начинать извлечение
длину извлекаемой подстроки
Функция возвращает false, если хотя бы одно из условий истинно:

Отрицательная длина извлекаемой подстроки
Отрицательный заданный индекс
Заданный индекс выходит за границу всей строки
Длина подстроки в сумме с заданным индексом выходит за границу всей строки
В ином случае функция возвращает true.

Не забывайте, что индексы начинаются с 0, поэтому индекс последнего элемента — это «длина строки минус 1».*/


function isArgumentsForSubstrCorrect(string $str, int $index, int $length): bool
{
    $strLength = strlen($str);

    // Проверяем все возможные критические условия
    if ($length < 0) {
        return false;
    }

    if ($index < 0) {
        return false;
    }

    if ($index >= $strLength) {
        return false;
    }

    if ($index + $length > $strLength) {
        return false;
    }

    // Все проверки пройдены — аргументы корректны
    return true;
}


$str = 'Sansa Stark';
var_dump(isArgumentsForSubstrCorrect($str, -1, 3));  // false
var_dump(isArgumentsForSubstrCorrect($str, 4, 100)); // false
var_dump(isArgumentsForSubstrCorrect($str, 10, 10)); // false
var_dump(isArgumentsForSubstrCorrect($str, 11, 1));  // false
var_dump(isArgumentsForSubstrCorrect($str, 3, 3));   // true
var_dump(isArgumentsForSubstrCorrect($str, 0, 5));   // true
echo "\n";
