<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));

require(ROOT . '/Autoload.php');

$className = [
    'book',
    'notebook',
    'paperSheet',
    'scrapbook',
    'glue',
    'pen',
    'ruler',
    'scissors',
    'item-1',
    'item-2',
    'item-3',
    'item-4',
];

shuffle($className);

echo '<pre>';

$items = [];

foreach ($className as $item) {
    $items[] = Creator::create($item);
}

foreach ($items as $item) {
    $item->show();
}
