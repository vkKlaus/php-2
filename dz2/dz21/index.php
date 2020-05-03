<?php

require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Animal.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Cow.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Chicken.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Pig.php';

require $_SERVER['DOCUMENT_ROOT'] . '/Farms/Farm.php';




$farm = new Farm();

$farm->addAnimal(new Cow('Люся'));
$farm->addAnimal(new Pig('Наф-Наф'));
$farm->addAnimal(new Pig('Ниф-Ниф'));
$farm->addAnimal(new Chicken('Маруся'));


 echo $farm->rollCall();