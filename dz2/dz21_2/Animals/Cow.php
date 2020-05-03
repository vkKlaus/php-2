<?php

/**
 *  класс корова
 */
class Cow extends Animal
{
    /**
     *  конструктор
     * @param string -$name - имя
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->kind = 'корова';
    }

    /**
     *  переопределенная абстрактная функция говорит
     * @return string -фраза
     */
    public function say(): string
    {
        return 'Му-у-у-у';
    }
}
