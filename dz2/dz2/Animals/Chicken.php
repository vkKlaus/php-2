<?php

class Chicken  extends Animal
{
    public function __construct(string $name)
    {
        parent::__construct(
            $name,  //name
            2,  //paws
            2,  //wings
            1,  //type - птица
            'Ко-ко-ко'//say
        );

        $this->setKind('курица');
    }
}