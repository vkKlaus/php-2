<?php

class RequestDB
{
    public $db;

    public function __construct()
    {
        $this->db = require $_SERVER['DOCUMENT_ROOT'] . '/db/UserDB.php';
    }
    public function findUser($id)
    {
        return $this->db[$id];
    }

    public function insertUser($data)
    {
        $id = 0;
        $str = '<?php' . PHP_EOL . 'return [' . PHP_EOL;

        foreach ($this->db as $key => $item) {
            $str .= "'$key' => [" . PHP_EOL;
            $str .= "'id'=>" . $item['id'] . "," . PHP_EOL;
            $str .= "'name'=>'" . $item['name'] . "'," . PHP_EOL;
            $str .= "'age'=>" . $item['age'] . "," . PHP_EOL;
            $str .= "]," . PHP_EOL;

            $id = ($id < $item['id']) ? $item['id'] : $id;

            // var_dump($key);
            // var_dump($item);
        }


        $email = $data['email'];

        $str .= "'$email' => [" . PHP_EOL;
        $str .= "'id'=>" . ++$id . "," . PHP_EOL;

        $str .= "'name'=>'" . $data['name'] . "'," . PHP_EOL;
        $str .= "'age'=>" . $data['age'] . "," . PHP_EOL;
        $str .= "]," . PHP_EOL;


        $str .= "];";

        try {
            file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/db/UserDB.php', $str);
        } catch (\Exception $e) {
            throw new Exception('ошибка записи');
        }

        $data['id'] = $id;

        return $data;
    }
}
