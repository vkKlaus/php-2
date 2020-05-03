<?php

class Cat
{
    public $name;
    public $color;
    public $yearOld;

    

    public function __construct(string $name,  $color,  $yeaOld)
    {
        $this->name = $name;   
        $this->color = $color;
        $this->yearOld = $yeaOld;
    }
}
