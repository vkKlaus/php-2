<?php

class ReadArray implements Reader
{
    public $path;
    public $data;

    public function __construct(string $path)
    {
        $this->path = $path;

    }

    public function read()
    {
        require $this->path;

        $this->data = $arrayData;
        return $this;
    }
}
