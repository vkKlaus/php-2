<?php

class Order
{
    public $basket;

    public function __construct($basket)
    {
        $this->setBasket($basket); 
    }
    
    public function setBasket($basket)
    {
        $this->basket = $basket;
    }

    public function getBasket()
    { 
         return $this->basket;
    }

    public function getPrice()
    {
        if (count($this->basket->goods) == 0){
            return 0;
        } 

        return $this->basket->getPrice();
    }
}
