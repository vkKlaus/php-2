<?php

abstract class Bird extends Animal
{
    public function tryToFly(): string
    {
        return 'Вжих-вжих ';
    }

    public   function walk(): string
    {
        return $this->tryToFly() . parent::walk();
    }
}
