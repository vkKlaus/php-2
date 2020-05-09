<?php

abstract class Bird extends Animal
{
    public function tryToFly(): string
    {
        return 'Вжих-вжих топ-топ';
    }

    public   function walk(): string
    {
        return $this->tryToFly() ;
    }
}
