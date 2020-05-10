<?php

class Calculator
{
    public static function calculate($number1=0, $number2=0, callable $callback)
    {
        return $callback($number1,$number2);  
    }
}