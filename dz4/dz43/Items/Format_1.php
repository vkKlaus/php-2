<?php

class Format_1 implements Formatter
{
    public $name = 'класс имеет интерфейс Formatter';
    public function format($string)
    {
        echo $this->name . PHP_EOL
            . 'выведем красную строку жирным'
            . '<p style="color:red"><strong>' . $string . '</strong></p><hr>';
    }
}
