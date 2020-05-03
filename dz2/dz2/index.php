<?php

require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Aniamal.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Beatle.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Chicken.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Cock.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Cow.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Fish.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Goose.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Horse.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Pig.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Snake.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Turkey.php';

require $_SERVER['DOCUMENT_ROOT'] . '/Farms/Farmer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Farms/Farm.php';




$farm = new Farm();

$farm->addAnimal(new Cow('Муся'));
$farm->addAnimal(new Pig('Хрю'));
$farm->addAnimal(new Pig('Срю'));
$farm->addAnimal(new Chicken('Люся'));


echo $farm->rollCall();