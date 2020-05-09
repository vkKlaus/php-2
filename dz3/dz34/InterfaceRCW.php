<?php

interface Reader
{
    public function read();
}

interface Converter
{
    public function convert($item);
}

interface Writer
{
    public function write($data);
}
