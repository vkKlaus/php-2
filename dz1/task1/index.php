<?php

require $_SERVER['DOCUMENT_ROOT'] . '/task1/Cat.php';
require $_SERVER['DOCUMENT_ROOT'] . '/task1/Dog.php';
require $_SERVER['DOCUMENT_ROOT'] . '/task1/Fish.php';

$cat1 = new Cat('cat 1');
$cat2 = new Cat('cat 2');
$cat3 = new Cat('cat 3');

$dog1 = new Dog('dog 1');
$dog2 = new Dog('dog 2');
$dog3 = new Dog('dog 3');
$dog4 = new Dog('dog 4');
$dog5 = new Dog('dog 5');

$fish1 = new Fish('fish 1');

echo '$cat1 -> Cat name is ' . $cat1->getName() . "<br>" .
    '$cat2 -> Cat name is' . $cat2->getName() . "<br>" .
    '$cat3 -> Cat name is' . $cat3->getName() . "<br><hr>" .
    '$dog1 -> Dog name is' . $dog1->getName() . "<br>" .
    '$dog2 -> Dog name is' . $dog2->getName() . "<br>" .
    '$dog3 -> Dog name is' . $dog3->getName() . "<br>" .
    '$dog4 -> Dog name is' . $dog4->getName() . "<br>" .
    '$dog5 -> Dog name is' . $dog5->getName() . "<br><hr>" .
    '$fish1 -> Fish name is' . $fish1->getName() . "<br>";

echo '<hr>
<a href="/">назад</a>';
