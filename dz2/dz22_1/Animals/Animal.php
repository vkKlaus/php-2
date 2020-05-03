<?php

class Animal
{

    private $name;
    private $paws;
    private $wings;
    private $type;
    private $kind;
    private $say;
    private $walk;



    public function __construct(string  $name, int $paws, int $wings, int  $type, string  $say, string $walk = 'топ-топ')
    {
        $this->setName($name);
        $this->setPaws($paws);
        $this->setWings($wings);
        $this->setType($type);
        $this->setSay($say);
        $this->setWalk($walk);
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setSay(string  $say)
    {
        $this->say = $say;
    }

    public function setWalk(string $walk)
    {
        $this->walk = $walk;
    }

    public function setPaws(int $paws)
    {
        $this->paws = $paws;
    }

    public function setWings(int $wings)
    {
        $this->wings = $wings;
    }

    public function setType(int $type)
    {
        $this->type = $type;
    }

    public function setKind(string $kind)
    {
        $this->kind = $kind;
    }

    public function getAnimal():string
    {
        return $this->getTypeStr() . ' ' . $this->getName() . '<br>'
            . 'вид: ' . $this->kind . '<br>'
            . 'говорит: ' . $this->say() . '<br>'
            . 'ходит: ' . $this->walk() . '<br>'
            . ($this->paws !=0 ? 'лап: ' . $this->paws . '<br>':'')
            . ($this->wings !=0 ?'крыльев: ' . $this->wings . '<br>':'');
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getKind():string
    {
        return $this->kind;
    }

    public function getTypeStr():string
    {
        switch ($this->type) {
            case 0:
                return 'животное';
            case 1:
                return 'птица';
            case 6:
                return 'фермер';

            default:
                return 'науке неизвестно';
        }
    }
    public function getType():string
    {
        return $this->type;
    }

    public function say():string
    {
        return $this->say;
    }

    public function walk():string
    {
        return $this->walk;
    }
    public function tryToFly():string
    {
        return  "Вжих-вжих ";
    }
}
