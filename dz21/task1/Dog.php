<?php

class Dog
{
    public $name;

    public function __construct($name)
    {
        $this->setName($name); 
      
    }
  
    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}