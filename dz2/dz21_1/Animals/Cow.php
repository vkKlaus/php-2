<?php

class Cow extends Animal
{
    public function __construct(string $name)
    {
        parent::__construct(
            $name,  //name
            4,  //paws
            0,  //wings
            0,  //type - животное
            'Му-у-у-у'//say
        );

        $this->setKind('корова');
    }
}