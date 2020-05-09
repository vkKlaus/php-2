<?php

class ConverterStringToArray implements Converter
{
    public $data;

    public function convert($read)
    {
        $this->data = explode(" ",$read->data);
        
        return $this;
    }
}
