<?php

// Магические числа

/* Вы столкнулись с таким кодом, который выводит на экран общее количество комнат во владении нынешнего короля:

<?php

$king = 'King Balon the 6th';
print_r($king . ' has ' . (6 * 17) . ' rooms.');
Как видите, это магические числа: непонятно, что такое 6 и что такое 17. Можно догадаться, если знать историю королевской семьи: каждый новый король получает в наследство все замки от предков и строит новый замок — точную копию родительского.

Эта странная династия просто плодит одинаковые замки…

Избавьтесь от магических чисел, создав новые переменные, а затем выведите текст на экран.

Получится так:

King Balon the 6th has 102 rooms.
Названия переменных должны передавать смысл чисел, но при этом должны оставаться достаточно короткими и ёмкими для комфортного чтения. */

$king = 'King Balon the 6th';

$numberOfCastles = 6;
$roomsPerCastle = 17;
print_r($king . ' has ' . ($numberOfCastles * $roomsPerCastle) . ' rooms.');
