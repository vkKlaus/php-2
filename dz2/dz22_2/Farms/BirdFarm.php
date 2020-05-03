<?php

class BirdFarm extends Farm
{

    public function addAnimal(Animal $animal)
    {
        parent::addAnimal($animal);

        $this->showAnimalsCount();
    }

    /**
     *   функция показа количества животных
     */
    public function showAnimalsCount()
    {
        echo 'Птиц на ферме:' . $this->animalsCount() . '<br><br>';
    }
}
