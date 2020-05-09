<?php

echo '<pre>';

require $_SERVER['DOCUMENT_ROOT'] . '/BlackBox.php'; 
require $_SERVER['DOCUMENT_ROOT'] . '/Plane.php'; 
require $_SERVER['DOCUMENT_ROOT'] . '/Engineer.php'; 

$plane = new Plane(new BlackBox());

for ($i=0; $i <=1000; $i++){
    $plane->flyAndCrush($i,$i,$i,$i);
}

$engineer = new Engineer;

$engineer->takeBox($plane);

print_r($engineer->decodeBox());



//первое i - скорость
//второе i - высота
//третье i - направление
//четвертое i - время

//полет нормальный пока i(4) < 750 (время полета)

//последним параметров в data пишется 1-полет 0-крушение