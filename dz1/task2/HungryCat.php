<?php

class HungryCat
{
    public $name;
    public $color;
    public $favoriteFood;

    public function __construct($name = 'Васька', $color = 'триколор',  $favoriteFood = 'рыба')
    {
        $this->setName($name);
        $this->setColor($color);
        $this->setFavoriteFood($favoriteFood);
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setFavoriteFood($favoriteFood)
    {
        $this->favoriteFood = $favoriteFood;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getFavoriteFood()
    {
        return $this->favoriteFood;
    }

    public function eatFavoriteFood($food)
    {
        return ($this->getFavoriteFood() == $food) ? ' замурчал "мрррррррррррррр" от своей любимой еды' : '...';
    }

    public function eat($food)
    {
        return 'Голодный кот ' . $this->getName() .
            ', особые приметы: цвет - ' . $this->getColor() .
            ', съел ' . $food .
            ' и ' . $this->eatFavoriteFood($food) . '<br><br>';
    }
}
