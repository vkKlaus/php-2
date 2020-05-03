<?php

class Gasoline
{
    public function burn(){
        return new Smoke();
    }

    public function __toString() 
    {
        return get_class($this);
    }
}