<?php

/**
 *  класс индейка
 */
class Turkey  extends Animal
{
    /**
     *  конструктор
     * @param string -$name - имя
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->type = 1;
        $this->kind = 'индейка';
    }

    /**
     *  переопределенная абстрактная функция говорит
     * @return string -фраза
     */
    public function say(): string
    {
        return 'Гуль-гульгуль';
    }
}
