<?php

/**
 * абстрактный класс
 */
abstract class Animal
{
    /**
     * абстрактный метод абстрактного класса животное говорит
     * @param string - $kind - вид животного
     */
    abstract public function say();

    /**
     * явный метод абстрактного класса животное идет
     * @return string - тип животного строкой
     */
    public function walk(): string
    {
        return 'топ-топ';
    }
}
