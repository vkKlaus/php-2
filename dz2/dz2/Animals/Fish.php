<?php

class Fish  extends Animal
{
    public function __construct(string $name,string $kind='рыба')
    {

        parent::__construct(
            $name,  //name
            0,  //paws
            0,  //wings
            2,  //type - рыба
            '........',//say
            'Хлюп'
        );

        $this->setKind($kind);
    }
}