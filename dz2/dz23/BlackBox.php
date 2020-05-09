<?php

class BlackBox
{
    private $data;

    public function addLog($message)
    {
        $this->data .= $message . PHP_EOL;
    }

    public function  getBoxForEngineer(Engineer $engineer){
        return $this->data;
    }
}
