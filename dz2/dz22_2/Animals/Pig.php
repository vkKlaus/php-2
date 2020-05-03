<?php

/**
 *  класс свинья
 */
class Pig  extends Animal
{
    /**
     *  конструктор
     * @param string -$name - имя
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->type = 0;
        $this->kind = 'свинья';
    }

    /**
     *  переопределенная абстрактная функция говорит
     * @return string -фраза
     */
    public function say(): string
    {
        return 'Хрю-Хрю';
    }
}
