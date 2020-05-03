<?php

class Horse  extends Hoffed
{
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->kind = 'лошадь';
    }

    public function say(): string
    {
        return 'И-го-го';
    }
}
