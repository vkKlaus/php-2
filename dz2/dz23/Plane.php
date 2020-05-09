<?php
class Plane
{
    private $blackBox;

//конструктор
    public function __construct(BlackBox $blackBox)
    {
        $this->setBlackBox($blackBox);
    }

//сеттер черного ящика
    public function setBlackBox($blackBox)
    {
        $this->blackBox = $blackBox;
    }

//процесс полета
    public function flyAndCrush(float $speed, float $height, float $direction, int $time)
    {
            $this->flyProcess($speed,  $height, $direction, $time);
            $this->crushProcess($speed,  $height, $direction, $time);
    }

//полет нормальный
    public function flyProcess(float $speed, float $height, float $direction, int $time)
    {
        if($this->checkingРarameters($speed,  $height, $direction, $time)){
        $this->addLog(implode("~",[$speed, $height, $direction, $time,1]));
        }
    }

//полет не нормальный
    public function crushProcess(float $speed, float $height, float $direction, int $time)
    {
        
        if(! $this->checkingРarameters($speed,  $height, $direction, $time)){
            $this->addLog(implode("~",[$speed, $height, $direction, $time,0]));
            }
    }

//проверка параметров (например проверяем если время полета < 750, то нормально. Просто для примера)
    public function checkingРarameters(float $speed, float $height, float $direction, int $time)
    {
        return $time<750;
    }

//пишем в черный ящик    
    protected  function addLog(string $message)
    {
        $this->blackBox->addLog($message) . PHP_EOL;
    }

//передаем обломки самолета    
    public function getDataByEngineer(Engineer $engineer)
    {
        return $engineer->takeBox($this);
    }

//достаем черный ящик
    public function getBlackBox()
    {
        return $this->blackBox;
    }
}
