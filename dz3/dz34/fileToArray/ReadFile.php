<?php

class ReadFile implements Reader
{
    public $data;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function read()
    {
        $this->data = file_get_contents($this->path);
        return $this;
    }
}
