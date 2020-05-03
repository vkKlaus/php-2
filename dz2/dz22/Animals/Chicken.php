<?php

class Chicken  extends Bird
{
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->kind = 'курица';
    }

    public function say(): string
    {
        return 'КО-ко-ко';
    }
}
