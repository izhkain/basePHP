<?php

// Оператор Элвис

// Напишите функцию generateAmount(), которая принимает два числа: количество товаров и стоимость аудита. Если товаров 0, то функция возвращает стоимость аудита, умноженную на 3. Если товаров не 0, то функция возвращает количество товаров.

function generateAmount($items, $auditCost)
{
    return $items ?: $auditCost * 3;
}

print_r(generateAmount(0, 2));   // 6
echo "\n";
print_r(generateAmount(0, 5));   // 15
echo "\n";
print_r(generateAmount(1, 2));   // 1
echo "\n";
print_r(generateAmount(12, 49)); // 12