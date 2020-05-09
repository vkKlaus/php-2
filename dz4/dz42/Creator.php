<?php

class Creator
{
    public static function create($name)
    {
        if (class_exists($name)) {
            return (new $name($name));
        } else {
            return (new EmptyItem($name));
        }
    }
}
