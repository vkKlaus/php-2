<?php

class Order
{
    public $number;
    public $date;
    public $buyer;
    public $basket;

    public function __construct($buyer,  $basket)
    {
        $this->number = date('YmdHis');
        $this->date = date('Y-m-d H:i:s');
        $this->setBuyer($buyer);
        $this->setBasket($basket);
    }

    public function setBuyer($buyer)
    {
        $this->buyer = $buyer;
    }

    public function setBasket($basket)
    {
        $this->basket = $basket;
    }

    public function getOrder()
    {
        $order = "Заказ № $this->number от $this->date <br>";
        $order .= "покупатель: " . $this->buyer->name . " (" . $this->buyer->email . ")<br><br>";
        $order .= $this->basket->describe();
        $order .= "------------------------<br>";
        $order .= "ИТОГО: " . $this->basket->getTotal();


        return $order;
    }

    public function getBasket()
    {
        $basket = [];
         foreach ($this->basket->goods as $product){
            $basket[] = [
               'product'=>$product['product']->name,
                'price'=> $product['product']->price,
                'count' => $product['count'],
                'sum' => $product['sum'],
            ];
         }
         return $basket;
    }

    public function getPrice()
    {
        if (count($this->basket->goods) == 0){
            return 0;
        } 

        return array_sum(array_column($this->basket->goods, 'sum'));
    }
}
