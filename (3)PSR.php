<?php

//Стандарты по написанию кода в PHP

//Выведите на экран результат следующего вычисления: «разница между пятью в квадрате и произведением трёх и семи». Напишите код так, чтобы каждый оператор отделялся от операндов пробелами.

print_r((5 ** 2) - (3 * 7));
echo "\n";

/*Напишите программу, которая выведет на экран: "Khal Drogo's favorite word is "athjahakar""
Программа должна вывести на экран эту фразу в точности. Обратите внимание на кавычки в начале и в конце фразы: "Khal Drogo's favorite word is "athjahakar""*/

print_r("\"Khal Drogo's favorite word is \"athjahakar\"\"");
echo "\n";

/*Напишите программу, которая выводит на экран:

- Did Joffrey agree?
- He did. He also said "I love using \n".
При этом программа использует только один print_r(), но результат на экране должен выглядеть в точности как показано выше.*/

print_r("- Did Joffrey agree?\n- He did. He also said \"I love using \\n\".");
echo "\n";

//Выведите на экран Winter came for the House of Frey. используя конкатенацию слов.

print_r("Winter " . "came " . "for " . "the " . "House " . "of " . "Frey.");
echo "\n";
