<?php

// Задание 2, пункт 1

echo "номер строки - " . __LINE__ . PHP_EOL;
echo "название файла - " . basename(__FILE__) . PHP_EOL;

// Задание 2, пункт 2

$str = <<<EOD
Текст
Еще текст
И еще немного текста
EOD;

echo $str . PHP_EOL;

// Задание 2, пункт 3

$a = "Рыба";
$b = "человек";

echo "{$a} рыбою сыта, а {$b} человеком";
