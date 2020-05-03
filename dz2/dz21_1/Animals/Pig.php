<?php

class Pig  extends Animal
{
    public function __construct(string $name,string $kind='свинья')
    {
        parent::__construct(
            $name,  //name
            4,  //paws
            0,  //wings
            0,  //type - животное
            'Хрю-хрю'   //say  
        );

        $this->setKind($kind);
    }
}