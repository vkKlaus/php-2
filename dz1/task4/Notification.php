<?php

class Notification
{
    public $receiver;
    public $via;
    public $to;

    public function __construct($receiver, $via, $to)
    {
        $this->setReceiver($receiver);
        $this->setVia($via);
        $this->setTo($to);
    }

    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
    }

    public function setVia($via)
    {
        $this->via = $via;
    }

    public function setTo($to)
    {
        $this->to = $to;
    }

    public function send($message)
    {
        return "Уведомление клиенту: $this->receiver на $this->via ($this->to): $message <br>"; 
    }

}
