<?php

// Юникод

// Допишите реализацию функции invertCase(), которая инвертирует регистр каждого символа в переданной строке.

function invertCase(string $str): string
{
    $result = '';
    $length = mb_strlen($str);

    for ($i = 0; $i < $length; $i++) {
        $char = mb_substr($str, $i, 1);
        if ($char === mb_strtoupper($char)) {
            $result .= mb_strtolower($char);
        } else {
            $result .= mb_strtoupper($char);
        }
    }

    return $result;
}


$str = 'ПрИвЕт!';
print_r(invertCase($str)); // пРиВеТ!