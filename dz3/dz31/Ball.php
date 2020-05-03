<?php
class Ball
{
    static public $count = 0;   
    public function __construct()
    {
        ++self::$count;
    }
}
