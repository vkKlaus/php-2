<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));

require(ROOT . '/Autoload.php');


echo '<pre>';

for ($j = 1; $j <= 10; $j++) {

    $str = "строка для форматирования №$j";

    for ($i = 1; $i <= 4; $i++) {
        $class = "Format_$i";
        Display::show(new $class(), $str);
    }

    echo "<hr>";
}




//var_dump($format);
