<?php

class Division
{
    public static function div($num1,$num2)
    {
        if ($num2==0){
            return  'делитель не может быть пустым или равен нулю';
        }

        return $num1 / $num2;
    }
}
