<?php
class Goose  extends Bird
{
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->kind = 'гусь';
    }

    public function say(): string
    {
        return 'Га-га-га';
    }
}
