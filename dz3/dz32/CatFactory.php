<?php

class CatFactory
{

    public static $numberCat=1; 

    protected static function addCat($name)
    {
        return $name .  self::$numberCat++;
    }
    
    public static function createBlack8YearsOldCat($name)
    {
        return new Cat(self::addCat($name), "black", 8);
    }

    public static function createGreen5YearsOldCat($name)
    {
        return new Cat(self::addCat($name), "green", 5);
    }

    public static function createWhite3YearsOldCat($name)
    {
        return new Cat(self::addCat($name), "white", 3);
    }

    public static function createBlack($name)
    {
        return new Cat(self::addCat($name), "black", null);
    }

    public static function createWhiteCat($name)
    {
        return new Cat(self::addCat($name), "white", null);
    }

    public static function create8YearsOldCat($name)
    {
        return new Cat(self::addCat($name), null, 8);
    }

    public static function createCat($name)
    {
        return new Cat(self::addCat($name), null, null);
    }
}
