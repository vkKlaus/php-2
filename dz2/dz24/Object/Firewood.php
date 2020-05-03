<?php

class Firewood
{
    public function burn(){
        return new BlueFlame();
    }

    public function __toString() 
    {
        return get_class($this);
    }
}