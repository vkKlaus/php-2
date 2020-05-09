<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));

require(ROOT . '/Autoload.php');

$items = [
    'book' => new Book(),
    'notebook' => new Notebook(),
    'paperSheet' => new PaperSheet(),
    'scrapbook' => new Scrapbook(),
    'glue' => new Glue(),
    'pen' => new Pen(),
    'ruler' => new Ruler(),
    'scissors' => new Scissors(),
];

shuffle($items);

echo '<pre>';

foreach ($items as $item) {
    (new Manager())->place($item);
}
