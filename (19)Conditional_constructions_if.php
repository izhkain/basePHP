<?php

// Условная конструкция (if)

// Реализуйте функцию guessNumber(), которая принимает число и проверяет, равно ли число заданному (пусть это будет 42). Если равно, то функция должна вернуть строку 'You win!', в противном случае нужно вернуть строку 'Try again!'.
// Условная конструкция (if)

// Реализуйте функцию guessNumber(), которая принимает число и проверяет, равно ли число заданному (пусть это будет 42). Если равно, то функция должна вернуть строку 'You win!', в противном случае нужно вернуть строку 'Try again!'.

function guessNumber($nubmer)
{
    if ($nubmer === 42) {
        return 'You win!';
    }
    return 'Try again!';
}

print_r(guessNumber(42));
echo "\n";
print_r(guessNumber(123));
echo "\n";

// else

/* Реализуйте функцию normalizeUrl(), которая выполняет так называемую нормализацию данных. Она принимает адрес сайта и возвращает его с https:// в начале.

Функция принимает адреса в виде АДРЕС или http://АДРЕС, но всегда возвращает адрес в виде https://АДРЕС

Есть два пути решения:

Можно сравнить первые 7 символов строки-аргумента со строкой http://.
Можно использовать функцию strpos, чтобы проверить, содержится ли в строке-аргументе подстрока http://.
А потом на основе этого добавлять или не добавлять https://. */

function normalizeUrl($url)
{
    if (substr($url, 0, 7) === 'http://') {
        return 'https://' . substr($url, 7);
    } else {
        (substr($url, 0, 8) !== 'https://');
        return 'https://' . $url;
    }
    return $url;
}

print_r(normalizeUrl('google.com'));
echo "\n";
print_r(normalizeUrl('http://ai.fi'));
echo "\n";

// Конструкция else if

// На электронной карте Вестероса, которую реализовал Сэм, союзники Старков отображены зеленым кружком, враги — красным, а нейтральные семьи — серым. Напишите для Сэма функцию whoIsThisHouseToStarks(), которая принимает на вход фамилию семьи и возвращает одно из трех значений: 'friend', 'enemy', 'neutral'.


function whoIsThisHouseToStarks(string $family): string
{
    if ($family === 'Karstark' || $family === 'Tully') {
        return 'friend';
    } elseif ($family === 'Lannister' || $family === 'Frey') {
        return 'enemy';
    } else {
        return 'neutral';
    }
}

print_r(whoIsThisHouseToStarks('Karstark')); // 'friend'
echo "\n";
print_r(whoIsThisHouseToStarks('Frey'));     // 'enemy'
echo "\n";
print_r(whoIsThisHouseToStarks('Joar'));     // 'neutral'
echo "\n";
print_r(whoIsThisHouseToStarks('Ivanov'));   // 'neutral'
echo "\n";

// Тернарный оператор

// Реализуйте функцию flipFlop(), которая принимает на вход строку и, если эта строка равна 'flip', возвращает строку 'flop'. В противном случае функция должна вернуть 'flip'.

function flipFlop($input)
{
    return $input === 'flip' ? 'flop' : 'flip';
}

print_r(flipFlop('flip')); // 'flop'
echo "\n";
print_r(flipFlop('flop')); // 'flip'