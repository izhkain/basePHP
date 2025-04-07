<?php

// Конструкция Switch

/* Реализуйте функцию getNumberExplanation(), которая принимает на вход число и возвращает объяснение этого числа. Если для числа нет объяснения, то возвращается just a number. Объяснения есть только для следующих чисел:

666 - devil number
42 - answer for everything
7 - prime number */

function getNumberExplanation($number)
{
    switch ($number) {
        case 666:
            return 'devil number';
        case 42:
            return 'answer for everything';
        case 7:
            return 'prime number';
        default:
            return 'just a number';
    }
}

print_r(getNumberExplanation(8)); // just a number
echo "\n";
print_r(getNumberExplanation(666)); // devil number
echo "\n";
print_r(getNumberExplanation(42));  // answer for everything
echo "\n";
print_r(getNumberExplanation(7));   // prime number