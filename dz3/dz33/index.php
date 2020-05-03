<?php

echo '<pre>';

require $_SERVER['DOCUMENT_ROOT'] . '/Abstract/Creature.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Abstract/Animal.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animal/Bear.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animal/Camel.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animal/Chicken.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animal/Fish.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animal/Moose.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animal/Shake.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animal/Tiger.php';

$animals = [];

$animals[] = new Bear();
$animals[] = new Camel();
$animals[] = new Chicken();
$animals[] = new Fish();
$animals[] = new Moose();
$animals[] = new Shake();
$animals[] = new Tiger();

foreach ($animals as $key => $item) {
    echo $item->move() . ' это '. get_class($item) . '-' . $key . PHP_EOL;
}
