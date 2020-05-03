<?php

class Farm
{
   
    public $animals = []; 

    public function addAnimal(Animal $animal)
    {

        echo 'заселяем <br>' .

            $animal->kind . ' ' . $animal->name . ' ---> ' . $animal->walk() . '<br>';

        $this->animals[] = $animal;

        echo 'заселили <br><br>';
    }

    function animalsCount(): int
    {
        return count($this->animals);
    }


    public function showAnimalsCount()
    {
        echo 'Животных на ферме:' . $this->animalsCount() . '<br>';
    }

    public function rollCall(): string
    {
        shuffle($this->animals);

        $anm = '';

        foreach ($this->animals as $item) {

            $anm .= $item->kind . ' ' . $item->name . ' ---> ' . $item->say() . '<br>';
        }

        return $anm;
    }
}
