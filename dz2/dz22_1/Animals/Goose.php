<?php

class Goose  extends Animal
{
    public function __construct(string $name)
    {
        parent::__construct(
            $name,  //name
            2,  //paws
            2,  //wings
            1,  //type - птица
            'Га-га-га',   //say
            'Шлеп-шлеп'    //walk   
        );

        $this->setKind('гусь');
    }
}