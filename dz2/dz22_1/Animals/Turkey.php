<?php

class Turkey  extends Animal
{
    public function __construct(string $name)
    {
        parent::__construct(
            $name,  //name
            2,  //paws
            2,  //wings
            1,  //type - птица
            'Гуль-гуль-гуль'   //say
        );
           
        $this->setKind('индюк');
    }
}