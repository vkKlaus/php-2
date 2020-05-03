<?php

class Shake  extends Animal
{
    public function __construct(string $name,string $kind='змея')
    {
        parent::__construct(
            $name,  //name
            0,  //paws
            0,  //wings
            3,  //type - змея
            'Ш-ш-ш-ш-ш-ш', //say 
            'шшшшшшшшшшшшшшшшшшшшшшшшшш'  //walk 
        );
        $this->setKind($kind);
    }
}