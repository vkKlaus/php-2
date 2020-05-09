<?php

class Format_2 implements Renderable
{
    public $name = 'класс имеет интерфейс Renderable';
    public function render($string)
    {
        echo $this->name . PHP_EOL
            . 'выведем $string 2 раза' . PHP_EOL . PHP_EOL
            . $string . ' + ' . $string . PHP_EOL . PHP_EOL
            . '<hr>';
    }
}
