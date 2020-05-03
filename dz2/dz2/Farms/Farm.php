<?php

class Farm
{
    private $farmer;
    private $animals = [];

    public function setOwner(Farmer $farmer)
    {
        $this->farmer = $farmer;
    }
    public function getOwner(): Farmer
    {
        return $this->farmer;
    }

    public function addAnimal(Animal $animal)
    {
        echo 'заселяем ' .
            $animal->getKind() . ' по кличке "' . $animal->getName() .
            '" ---> ' .
            $animal->walk() . '<br>';

        $this->animals[] = $animal;

        echo 'заселили <br><br>';
    }


    public function rollCall(): string
    {
        shuffle ($this->animals);

        $anm = '';

        foreach ($this->animals as $item) {

            $anm .= $item->getKind() . ' по кличке "' . $item->getName() . '" ---> ' . $item->say() . '<br>';
        }

        return $anm;
    }
}
