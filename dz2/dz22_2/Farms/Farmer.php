<?php

class Farmer  
{
     /**
     *   функция заселить ферму
     * @param Farm $farm -объект ферма 
     * @param Animal $animal -объект животного
     */
    public function addAnimal(Farm $farm, Animal $animal) 
    {
            $farm->addAnimal($animal);
    }

    public function rollCall(Farm $farm) 
    {
        return $farm->rollCall().'<br>';
    }
}
