<?php 

class Format_3
{
    public $name = 'класс не имеет интерфейс Formatter, но имеет метод format';
    public function format($string)
    {
        echo $this->name . PHP_EOL
        . 'выведем зеленую строку курсивом'
        . '<p style="color:green"><em>' . $string . '</em></p><hr>';
    }

}