<?php
class ToyFactory
{
    public function createToy($name)
    {
        return new Toy($name, rand(1,10));
    }
}
