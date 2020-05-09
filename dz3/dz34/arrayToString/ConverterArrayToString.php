<?php

class ConverterArrayToString implements Converter
{
    public $data;

    public function convert($read)
    {
        $this->data = implode(" ", $read->data);

        return $this;
    }
}
