<?php

class Farm
{
    private $animals = [];

    public function addAnimal(Animal $animal)
    {
        echo '<br>заселяем <br>' .
            $animal->getKind() . ' по кличке "' . $animal->getName() .
            '" ---> ' . (($animal->getType() == 1) ? $animal->tryToFly():'').
            $animal->walk() . '<br>';

        $this->animals[] = $animal;

        echo 'заселили <br>';
    }
    public function animalsCount(){
        return  count($this->animals);
    }


    public function rollCall(): string
    {
        shuffle ($this->animals);

        $anm = '<br>';

        foreach ($this->animals as $item) {
            $anm .= $item->getKind() . ' по кличке "' . $item->getName() . '" ---> ' . $item->say() . '<br>';
        }

        return $anm;
    }
}
