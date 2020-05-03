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
            return $farm->addAnimal($animal);
    }

    public function rollCall(Farm $farm) 
    {
        return $farm->rollCall();
    }
}
