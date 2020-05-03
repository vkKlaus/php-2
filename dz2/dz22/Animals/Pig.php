<?php

class Pig  extends Hoffed
{

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->kind = 'свинья';
    }

    public function say(): string
    {
        return 'Хрю-Хрю';
    }
}
