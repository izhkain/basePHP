<?php

// Поиск стартовой позиции

// Допишите реализацию функции startsWith(), которая определяет, начинается ли строка с подстроки.

function startsWith($text, $substr)
{
    return mb_strpos($text, $substr) === 0;
}

var_dump(startsWith('Хекслет', 'ет'));
var_dump(startsWith('Хекслет', 'Хек'));
