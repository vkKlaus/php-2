<?php

require $_SERVER['DOCUMENT_ROOT'] . '/task5/Product.php';
require $_SERVER['DOCUMENT_ROOT'] . '/task5/Basket.php';
require $_SERVER['DOCUMENT_ROOT'] . '/task5/Order.php';
require $_SERVER['DOCUMENT_ROOT'] . '/task4/User.php';
require $_SERVER['DOCUMENT_ROOT'] . '/task4/Notification.php';

// -------------------------------------------------------------------------------------------------------
$basket = new Basket();

for ($i = 1; $i <= rand(1, 5); $i++) {
    $basket->addProduct(new Product('товар' . $i, rand(1, 100)), rand(1, 10));
}

$order = new Order($basket);
echo $order->getBasket()->describe();
echo $order->getPrice();

echo '<br><hr>';

$user_1 = new User('Николай Николаич', 'email_1',25);
echo $user_1->notify('<br>для вас создан заказ на сумму ' . $order->getPrice() . '<br>Состав:<br>' . $order->getBasket()->describe());

// -------------------------------------------------------------------------------------------------------
echo "<hr>
        <a href=\"/\">назад</a>";
