<?php
echo '<pre>';
require $_SERVER['DOCUMENT_ROOT'] . '/Box.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Ball.php';

$box = new Box();

for ($i = 0; $i <= rand(1, 1000); $i++) {
    $box->putBall(new Ball());
}

echo Ball::$count;
