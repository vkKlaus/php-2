<?php

class Diesel
{
    public function burn(){
        return new RedFlame();
    }

    public function __toString() 
    {
        return get_class($this);
    }
}