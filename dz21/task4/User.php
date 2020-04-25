<?php

class User
{
    public $name;
    public $email;
    public $age;
    public $gender;
    public $phone;

    public function __construct($name, $email, $age = 0, $gender = 'it', $phone = '')
    {
        $this->setName($name);
        $this->setEmail($email);
        $this->setAge($age);
        $this->setGender($gender);
        $this->setPhone($phone);
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function notifyOnEmail($message)
    {
        $notif = new Notification($this->name, 'email', $this->email);

        return $notif->send($message);
    }

    public function notifyOnPhone($message)
    {
        $notif = new Notification($this->name, 'телефон', $this->phone);

        return $notif->send($message);
    }

    public function notify($message)
    {
        $result = '';


        if ($this->email) {
            $result .= $this->notifyOnEmail($this->censor($message));
        }

        if ($this->phone) {
            $result .= $this->notifyOnPhone($this->censor($message));
        }

        return $result;
    }

    public function censor($message)
    {
        if ($this->age < 18) {

            $pattern = "/\w{0,5}[хx]([хx\s\!@#\$%\^&*+-\|\/]{0,6})[уy]([уy\s\!@#\$%\^&*+-\|\/]{0,6})[ёiлeеюийя]\w{0,7}|\w{0,6}[пp]([пp\s\!@#\$%\^&*+-\|\/]{0,6})[iие]([iие\s\!@#\$%\^&*+-\|\/]{0,6})[3зс]([3зс\s\!@#\$%\^&*+-\|\/]{0,6})[дd]\w{0,10}|[сcs][уy]([уy\!@#\$%\^&*+-\|\/]{0,6})[4чkк]\w{1,3}|\w{0,4}[bб]([bб\s\!@#\$%\^&*+-\|\/]{0,6})[lл]([lл\s\!@#\$%\^&*+-\|\/]{0,6})[yя]\w{0,10}|\w{0,8}[её][bб][лске@eыиаa][наи@йвл]\w{0,8}|\w{0,4}[еe]([еe\s\!@#\$%\^&*+-\|\/]{0,6})[бb]([бb\s\!@#\$%\^&*+-\|\/]{0,6})[uу]([uу\s\!@#\$%\^&*+-\|\/]{0,6})[н4ч]\w{0,4}|\w{0,4}[еeё]([еeё\s\!@#\$%\^&*+-\|\/]{0,6})[бb]([бb\s\!@#\$%\^&*+-\|\/]{0,6})[нn]([нn\s\!@#\$%\^&*+-\|\/]{0,6})[уy]\w{0,4}|\w{0,4}[еe]([еe\s\!@#\$%\^&*+-\|\/]{0,6})[бb]([бb\s\!@#\$%\^&*+-\|\/]{0,6})[оoаa@]([оoаa@\s\!@#\$%\^&*+-\|\/]{0,6})[тnнt]\w{0,4}|\w{0,10}[ё]([ё\!@#\$%\^&*+-\|\/]{0,6})[б]\w{0,6}|\w{0,4}[pп]([pп\s\!@#\$%\^&*+-\|\/]{0,6})[иeеi]([иeеi\s\!@#\$%\^&*+-\|\/]{0,6})[дd]([дd\s\!@#\$%\^&*+-\|\/]{0,6})[oоаa@еeиi]([oоаa@еeиi\s\!@#\$%\^&*+-\|\/]{0,6})[рr]\w{0,12}/i";

            $replacement = " [цензура] ";

            $result = preg_replace($pattern, $replacement, $message);

            if ($result != $message) {
                $result .= " Согласен, иногда срабатывет не совсем корректно .... Но задача для великого и могучего русского языка в принципе не выполнимая...(я знаю, я прослужил 15 лет в советской, российской армии)";
            }

            return $result;
        } else {
            return $message;
        }
    }
}
