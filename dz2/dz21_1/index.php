<?php

require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Animal.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Cow.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Chicken.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Pig.php';

require $_SERVER['DOCUMENT_ROOT'] . '/Farms/Farm.php';




$farm = new Farm();

$farm->addAnimal(new Cow('Муся'));
$farm->addAnimal(new Pig('Хрю'));
$farm->addAnimal(new Pig('Срю'));
$farm->addAnimal(new Chicken('Люся'));


echo $farm->rollCall();