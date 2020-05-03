<?php

abstract class Animal
{
    private $name;
    private $kind;

    abstract public function say();

    public function walk(): string
    {
        return 'топ-топ';
    }

}
