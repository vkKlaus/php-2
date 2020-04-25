<?php
require $_SERVER['DOCUMENT_ROOT'] . '/task3/Toy.php';
require $_SERVER['DOCUMENT_ROOT'] . '/task3/ToyFactory.php';

$toyNames = [];

for ($i = 1; $i <= 20; $i++) {
        $toyNames[] = "Игрушка-$i";
}

$createToy = new ToyFactory();

$toys = [];

for ($i = 1; $i < 20; $i++) {
        $toys[] = $createToy->createToy($toyNames[rand(0, 19)]);
}

$totalCout = 0;

echo "<pre>";
foreach ($toys  as $toy) {
        echo "$toy->name:&#9;$toy->price$<br>";

        $totalCout += $toy->price;
}
echo "</pre>
        <hr>";

echo "ИТОГО: $totalCout$";

echo '<hr>
        <a href="/">назад</a>';
