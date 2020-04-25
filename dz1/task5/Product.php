<?php

class Product
{
    public $name;
    public $price;

    public function __construct($name,$price)
    {
        $this->setName($name);
        $this->setPrice($price);
    }
    
    public function setName($name)
    {
        $this->name=$name;
    }

    public function setPrice($price)
    {
        $this->price=$price;
    }

    public function getProduct(){
        return  $this->name. ' ' . $this->price;
    }
}
