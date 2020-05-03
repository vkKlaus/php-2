<?php

class Farmer  extends Animal
{
    private $smoke;
    private $arms;
    private $legs;

    public function __construct(string $name, bool $smoke = false, int $arms = 2, int $legs = 2)
    {
        parent::__construct(
            $name,  //name
            4,  //paws
            0,  //wings
            6,  //type - рыба
            'я человек' //say
        );

        $this->setKind('человек');
        $this->setSmoke($smoke);
        $this->setArms($arms);
        $this->setLegs($legs);
    }

    public function setSmoke(bool $smoke)
    {
        $this->smoke = $smoke;
    }
    public function setArms(int $arms)
    {
        $this->arms = $arms;
    }
    public function setLegs(int $legs)
    {
        $this->legs = $legs;
    }

    public function getAnimal(): string
    {
        return parent::getAnimal()
            . 'руки: ' . $this->arms. '<br>'
            . 'ноги: ' . $this->legs. '<br>'
            . 'курит: ' . ($this->smoke ? 'да' : 'нет') . '<br>';
    }
}
