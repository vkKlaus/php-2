<?php

require  $_SERVER['DOCUMENT_ROOT'] . '/Calculator.php';
require  $_SERVER['DOCUMENT_ROOT'] . '/Division.php';

$num1 = 5;
$num2 = 10;

function add($num1, $num2)
{
    return $num1 + $num2;
};

$mult = function () use ($num1, $num2) {
    return $num1 * $num2;
};


$callbacks = [
    'addition' => Calculator::calculate($num1, $num2, 'add'),

    'subtraction' => Calculator::calculate($num1, $num2, function ($num1, $num2) {
        return $num1 - $num2;
    }),

    'multiplication' => Calculator::calculate($num1, $num2, $mult),

    'division' => Calculator::calculate($num1, $num2, [Division::class, 'div']),
];

echo '<pre>';

echo "number1 = $num1, number2 = $num2" . PHP_EOL;

foreach ($callbacks as $operation => $value) {
    echo "$operation: $value" . PHP_EOL;
}
