<?php

echo '<pre>';

require $_SERVER['DOCUMENT_ROOT'] . '/Cat.php'; 
require $_SERVER['DOCUMENT_ROOT'] . '/CatFactory.php'; 

$catFactory=new CatFactory();

$arratCats = [];

$arratCats[] = $catFactory->createBlack8YearsOldCat('Cat');
$arratCats[] = $catFactory->createGreen5YearsOldCat('Cat');
$arratCats[] = $catFactory->createWhite3YearsOldCat('Cat');
$arratCats[] = $catFactory->createBlack('Cat');
$arratCats[] = $catFactory->createWhiteCat('Cat');
$arratCats[] = $catFactory->create8YearsOldCat('Cat');
$arratCats[] = $catFactory->createCat('Cat');

print_r($arratCats);