<?php

class Alcohol
{
    public function burn(){
        return new RedFlame();
    }

    public function __toString() 
    {
        return get_class($this);
    }
}