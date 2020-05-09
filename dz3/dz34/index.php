<?php

echo '<pre>';

require $_SERVER['DOCUMENT_ROOT'] . '/InterfaceRCW.php';

require $_SERVER['DOCUMENT_ROOT'] . '/Import.php';

require $_SERVER['DOCUMENT_ROOT'] . '/arrayToString/ReadArray.php';
require $_SERVER['DOCUMENT_ROOT'] . '/arrayToString/ConverterArrayToString.php';
require $_SERVER['DOCUMENT_ROOT'] . '/arrayToString/WriteFile.php';

require $_SERVER['DOCUMENT_ROOT'] . '/fileToArray/ReadFile.php';
require $_SERVER['DOCUMENT_ROOT'] . '/fileToArray/ConverterStringToArray.php';
require $_SERVER['DOCUMENT_ROOT'] . '/fileToArray/WriteArray.php';

//массив в файл-строка
$importArray = (new Import())
    ->from(new ReadArray($_SERVER['DOCUMENT_ROOT'] . '/arrayToString/_inArray.php'))
    ->to(new WriteFile($_SERVER['DOCUMENT_ROOT'] . '/arrayToString/_outFile.txt'))
    ->with(new ConverterArrayToString()) 
    ->execute();

//файл-строка в массив
$imporFile = (new Import())
    ->with(new ConverterStringToArray())
    ->to(new WriteArray($_SERVER['DOCUMENT_ROOT'] . '/fileToArray/_outArray.php'))
    ->from(new ReadFile($_SERVER['DOCUMENT_ROOT'] . '/fileToArray/_inFile.txt'))
    ->execute();


$import = (new Import())
->from(new ReadArray($_SERVER['DOCUMENT_ROOT'] . '/arrayToString/_inArray.php'))
->to(new WriteArray($_SERVER['DOCUMENT_ROOT'] . '/arrayToString/_ourArray.php'))
->with(new ConverterArrayToString()) 
->with(new ConverterStringToArray()) 
->execute(); 