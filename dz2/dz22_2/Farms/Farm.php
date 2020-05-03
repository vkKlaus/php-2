<?php

class Farm
{
    /**
     * свойства класс
     */
    private $animals = []; //массив животных

    /**
     *   функция заселить
     * @param Animal -объект животного
     */
    public function addAnimal(Animal $animal)
    {

        echo 'заселяем <br>' .

            $animal->kind . ' ' . $animal->name . ' ---> ' . $animal->walk() . '<br>';

        $this->animals[] = $animal;

        echo 'заселили <br><br>';
    }

    /**
     *   функция подсчета животных
     * @return int количество животных на ферме
     */
    function animalsCount(): int
    {
        return count($this->animals);
    }

    /**
     *   функция показа количества животных
     */
    public function showAnimalsCount()
    {
        echo 'Животных на ферме:' . $this->animalsCount() . '<br>';
    }

    /**
     *   функция перекличка
     * @return string -строка перемешанного массива животных
     */
    public function rollCall(): string
    {
        shuffle($this->animals);

        $anm = '';

        foreach ($this->animals as $item) {

            $anm .= $item->kind . ' ' . $item->name . ' ---> ' . $item->say() . '<br>';
        }

        return $anm;
    }
}
