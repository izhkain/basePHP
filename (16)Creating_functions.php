<?php

// Реализуйте функцию с именем printMotto(), которая выведет на экран фразу Winter is coming.

function printMotto()
{
    $text = 'Winter is coming';
    print_r($text);
}

printMotto();
echo "\n";


// Реализуйте функцию sayHurrayThreeTimes(), которая возвращает строку 'hurray! hurray! hurray!'.

function sayHurrayThreeTimes()
{
    $word = 'hurray!';
    return "{$word} {$word} {$word}";
}

print_r(sayHurrayThreeTimes());
echo "\n";

/*  Реализуйте функцию truncate(), которая обрезает переданную в функцию строку до указанного количества символов, добавляет в конце троеточие и возвращает получившуюся строку. Подобная логика часто используется на сайтах, чтобы отобразить длинный текст в сокращенном виде. Функция принимает два параметра:
Строка, которую нужно обрезать
Число символов, которые нужно оставить */

function truncate($str, $length)
{
    $cuttedString = substr($str, 0, $length);
    return "{$cuttedString}...";
}

print_r(truncate('welcome', 3));
echo "\n";

/* Реализуйте функцию getHiddenCard(), который принимает на вход номер кредитки (состоящий из 16 цифр) в виде строки и возвращает его скрытую версию, которая может использоваться на сайте для отображения. Если исходная карта имела номер 2034399002125581, то скрытая версия выглядит так ****5581. Другими словами, функция заменяет первые 12 символов, на звездочки. Количество звездочек регулируется вторым необязательным параметром. Значение по умолчанию — 4. */

function getHiddenCard(string $cardNumber, int $starsCount = 4)
{
    $visiblePart = substr($cardNumber, -4);


    $stars = str_repeat('*', $starsCount);


    return $stars . $visiblePart;
}

print_r(getHiddenCard(2034399002125581));
echo "\n";
