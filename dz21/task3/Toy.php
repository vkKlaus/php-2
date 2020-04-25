<?php

class Toy
{
    public $name;
    public $price;

    public function __construct($name = '', $price = 0)
    {
        $this->setName($name);
        $this->setPrice($price);
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    // для 5 задания
    public function getProduct()
    {
        return  "$this->name / $this->price";
    }

    public function getName()
    {
        return  $this->name;
    }

    public function getPrice()
    {
        return   $this->price;
    }


}
