<?php

require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Animal.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Bird.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Hoffed.php';

require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Chicken.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Cow.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Goose.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Horse.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Pig.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Animals/Turkey.php';

require $_SERVER['DOCUMENT_ROOT'] . '/Farms/Farm.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Farms/BirdFarm.php';

require $_SERVER['DOCUMENT_ROOT'] . '/Farms/Farmer.php';

$farm = new Farm();
$birdFarm = new BirdFarm();

$farmer = new Farmer();

echo $farmer->addAnimal($farm,new Cow('Cow'));

for ($i=1; $i<=2;$i++){
    $farmer->addAnimal($farm,new Pig('Pig'.$i)); 
}

$farmer->addAnimal($birdFarm,new Chicken('Chicken'));

for ($i=1; $i<=3;$i++){
    $farmer->addAnimal($birdFarm,new Turkey('Turkey'.$i)); 
}

for ($i=1; $i<=2;$i++){
    $farmer->addAnimal($farm,new Horse('Horse'.$i)); 
}

$farmer->addAnimal($birdFarm,new Goose('Goose'));


echo $farmer->rollCall($birdFarm).'<br>';

echo $farmer->rollCall($farm).'<br>';
