<?php

require $_SERVER['DOCUMENT_ROOT'] . '/Forge.php';

require $_SERVER['DOCUMENT_ROOT'] . '/Flame/Smoke.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Flame/BlueFlame.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Flame/RedFlame.php';

require $_SERVER['DOCUMENT_ROOT'] . '/Object/Alcohol.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Object/Coal.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Object/Diesel.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Object/Firewood.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Object/Gasoline.php';


$forge = new Forge();

echo '<pre>';

$forge->burn(new Coal());
$forge->burn(new Alcohol());
$forge->burn(new Diesel());
$forge->burn(new Firewood());
$forge->burn(new Gasoline());

echo '</pre>';