<?php

require $_SERVER['DOCUMENT_ROOT'] . '/task3/Toy.php';
require $_SERVER['DOCUMENT_ROOT'] . '/task5/Basket.php';
require $_SERVER['DOCUMENT_ROOT'] . '/task5/Order.php';
require $_SERVER['DOCUMENT_ROOT'] . '/task4/User.php';
require $_SERVER['DOCUMENT_ROOT'] . '/task4/Notification.php';

// -------------------------------------------------------------------------------------------------------
echo "ТОВАРЫ <br>"; //что-бы не бить руками
$products = [];
for ($i = 1; $i <= 10; $i++) {
    $products[] = new Toy("товар-" . ($i < 10 ? " $i" : "$i"), rand(1, 100));
}

for ($i = 0; $i < 10; $i++) {
    echo  "$i. / " . $products[$i]->getName() . ' / ' . $products[$i]->getPrice() . "<br>";
}

// -------------------------------------------------------------------------------------------------------
echo "<hr>";
echo "КОРЗИНА<br>";

$basket = new Basket();

for ($i = 1; $i <= rand(1, 5); $i++) {
    $basket->addProduct($products[rand(0, 9)], rand(1, 10));
}

echo $basket->describe();
echo "--------------------------------------<br>";
echo "ИТОГО: " . $basket->getTotal();

// -------------------------------------------------------------------------------------------------------
echo "<hr>";
echo "ЗАКАЗ <br>";
$user_1 = new User('покупатель-1', 'email_1', 25, 'it');

$order = new Order($user_1, $basket);

$orderString = "товар\t\tцена\t\tколичество\t\tсумма<br>";
$orderBasket = $order->getBasket();

foreach ($orderBasket as $product) {
    $orderString .= $product['product'] . "\t\t"
        . $product['price'] . "\t\t"
        . $product['count'] . "\t\t"
        . $product['sum'] . "<br>";
}

$orderBlock = "<pre>"
    . "Заказ № $order->number от $order->date <br>"
    . "покупатель: " . $order->buyer->name . " (" . $order->buyer->email . ")<br><br>"
    . $orderString . "<br>"
    . "--------------------------------------<br>"
    . "ИТОГО сумма: " . $order->getPrice()
    . "</pre>";

echo  $orderBlock;

// -------------------------------------------------------------------------------------------------------
echo "<hr>";
echo "УВЕДОМЛЕНИЕ <br> <br>";
echo $user_1->notify('<br>для вас создан ' . $orderBlock) ;

// -------------------------------------------------------------------------------------------------------
echo "<hr>
        <a href=\"/\">назад</a>";
