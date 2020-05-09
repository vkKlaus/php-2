<?php

class Engineer
{
    private $blackBox;
   
    //получаем обломки самолета
    public function takeBox(Plane $plane) // должен доставать черный ящик из самолета (нужно посмотреть, какой подходящий метод есть в классе Plane);
    {
      
        $this->setBox($plane->getBlackBox());
    }

    public function setBox(BlackBox $blackBox) // устанавливает черный ящик для дешифрации у инженера;
    {
        $this->blackBox =  $blackBox;  
    }

    public function decodeBox() // декодирует черный ящик — выводит на экран лог черного ящика.
    {
        return $this->blackBox-> getBoxForEngineer($this);
    }
}
