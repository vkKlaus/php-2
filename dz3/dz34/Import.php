<?php

class Import
{
    public $reader;
    public $converters = [];
    public $writer;

    public function from($reader)
    {
        $this->reader = $reader;

        return $this;
    }

    public function with($converter)
    {
        $this->converters[] = $converter;
        
        return $this;
    }

    public function to($writer)
    {
        $this->writer = $writer;

        return $this;
    }

    public function execute()
    {
        $convert = $this->reader->read();

        foreach ($this->converters as $item) {
            $convert =  $item->convert($convert);
        }

        $this->writer->write($convert);

        return $this;
    }
}
