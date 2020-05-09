<?php

class WriteFile implements Writer
{
    public $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function write($convert)
    {
        file_put_contents($this->path, $convert->data);
       
        return $this; 
    }
}