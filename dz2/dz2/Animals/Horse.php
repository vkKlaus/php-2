<?php

class Horse extends Animal
{
    public function __construct(string $name)
    {
        parent::__construct(
            $name,  //name
            4,  //paws
            0,  //wings
            0,  //type - животное
            'И-го-го',   //say
            'Цок-цок'    //walk   
        );

        $this->setKind('лошадь');
    }

}