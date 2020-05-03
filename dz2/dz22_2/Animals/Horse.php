<?php

/**
 *  класс лошадь
 */
class Horse  extends Animal
{
    /**
     *  конструктор
     * @param string -$name - имя
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->type = 0;
        $this->kind = 'лошадь';
    }

    /**
     *  переопределенная абстрактная функция говорит
     * @return string -фраза
     */
    public function say(): string
    {
        return 'И-го-го';
    }
}
