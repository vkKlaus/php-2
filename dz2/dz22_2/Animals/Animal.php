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
     * явный метод абстрактного класса животное идет, но если это птица (type==1), то тогда пробуем взлететь
     * @return string - тип животного строкой
     */
    public function walk(): string
    {
        return ($this->type == 1 ? $this->tryToFly() : '') . 'топ-топ';
    }

    /**
     * явный метод абстрактного класса животное пытается взлететь
     * @return string - тип животного строкой
     */
    public function tryToFly(): string
    {
        return 'Вжих-вжих-';
    }
}
