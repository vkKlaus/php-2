<?php

class BirdFarm extends Farm
{

    public function addAnimal(Animal $animal)
    {
        parent::addAnimal($animal);

        $this->showAnimalsCount();
    }

    public function showAnimalsCount()
    {
        echo 'Птиц на ферме:'. $this->animalsCount().'<br>';
    }
}
