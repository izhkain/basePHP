<?php

//Что такое переменная

//Создайте переменную с именем $motto и содержимым What Is Dead May Never Die!. Распечатайте содержимое переменной.

$motto = 'What Is Dead May Never Die!';
print_r($motto);
echo "\n";

//В упражнении определена переменная, внутри которой строка. Переопределите значение этой переменной и присвойте ей строку, в которой расположите символы первоначальной строки в обратном порядке.


$name = 'Brienna';
$name = 'anneirB';
print_r($name);
echo "\n";

//Создайте переменную, описывающую количество моих братьев, и присвойте ей значение 2. Распечатайте содержимое переменной. Затем сравните своё имя с именем, которое используется в учительском решении.

$brothersCount = 2;
print_r($brothersCount);
echo "\n";


//Ответ учителя 
$myBrothersCount = 2;
print_r($myBrothersCount);
echo "\n";


//Найдите в программе необъявленную переменную и объявите её, присвоив ей значение 'Dragon'.После выполнения программы результат на экране должен выглядеть так: Targaryen and Dragon

$family = 'Targaryen';
$pet = 'Dragon';
print_r($family);
print_r(' and ');
print_r($pet);
echo "\n";

/*Напишите программу, которая берёт исходное количество евро из переменной $eurosCount, переводит евро в доллары и выводит значение на экран. Затем программа полученное значение переводит в юани и выводит результат на новой строчке. Пример вывода для 100 евро. 

Считаем, что:
1 евро = 1.25 долларов
1 доллар = 6.91 юаней */

$eurosCount = 100; // Исходное количество евро

// Конвертация евро в доллары
$dollarsCount = $eurosCount * 1.25;

// Конвертация долларов в юани
$yuanCount = $dollarsCount * 6.91;

// Вывод результатов
print_r($dollarsCount . "\n" . $yuanCount);
echo "\n";

/* Сайты постоянно посылают письма своим пользователям. Типичная задача — сделать автоматическую отправку персонального письма, где в заголовке будет имя пользователя. Если где-то в базе сайта хранится имя человека в виде строки, то задача генерации заголовка сводится к конкатенации: например, нужно склеить строку Здравствуйте со строкой, где записано имя.

Напишите программу, которая будет генерировать заголовок и тело письма, используя уже готовые переменные, и выводить получившиеся строки на экран.

Для заголовка используйте переменные $firstName и $greeting, запятую и восклицательный знак. Выведите это на экран в правильном порядке.

Для тела письма используйте переменные $info и $intro, при этом второе предложение должно быть на новой строке.

Результат на экране будет выглядеть так:

Hello, Joffrey!
Here is important information about your account security.
We couldn't verify you mother's maiden name.
Выполните задание, используя только два print_r(). */


$info = "We couldn't verify you mother's maiden name.";
$intro = "\nHere is important information about your account security.";

$firstName = 'Joffrey';

$greeting = 'Hello';

print_r($greeting . ', ' . $firstName . "!");
print_r($intro . "\n" . $info);
echo "\n";

/*Создайте две переменные с именами «первое число» и «второе число» на английском языке, используя lowerCamelCase. Запишите в первую переменную число 1.10, во вторую — -100. Выведите на экран произведение чисел, записанных в получившиеся переменные.

Код будет работать с любыми названиями, а наша система всегда проверяет только результат на экране, поэтому выполнение этого задания — под вашу ответственность.*/

$firstNumber = 1.1;
$secondNumber = -100;
print_r($firstNumber * $secondNumber);
echo "\n";
