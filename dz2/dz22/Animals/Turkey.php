<?php

class Turkey  extends Bird
{
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->type = 1;
        $this->kind = 'индейка';
    }

    public function say(): string
    {
        return 'Гуль-гульгуль';
    }
}
