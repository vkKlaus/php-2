<?php

require $_SERVER['DOCUMENT_ROOT'] . '/task2/HungryCat.php';

$cat1 = new HungryCat('Кот-1', 'цвет-1','еда-1');
$cat2 = new HungryCat('Кот-2', 'цвет-2','еда-2');

for ($i=1; $i<=5;$i++){
    echo $cat1->eat('еда-'.$i);
    echo $cat2->eat('еда-'.$i) . '<br>';
}


echo '<hr>
        <a href="/">назад</a>';