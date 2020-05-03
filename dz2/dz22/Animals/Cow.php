<?php

class Cow extends Hoffed
{
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->kind = 'корова';
    }

    public function say(): string
    {
        return 'Му-у-у-у';
    }
}
