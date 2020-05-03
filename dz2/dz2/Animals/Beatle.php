<?php

class Beatle  extends Animal
{
    public function __construct(string $name,string $kind='жук')
    {
        parent::__construct(
            $name,  //name
            6,  //paws
            4,  //wings
            4,   //type - насекомое
            'Ж-ж-ж-ж-ж-ж', //say
            'шшшшшшшшшшшшшш' //walk
        );

        $this->setKind($kind);
    }
}
