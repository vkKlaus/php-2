<?php

class User
{
    public $db;

    public function __construct()
    {
        $this->db = new RequestDB();
    }

    public function load($id)
    {
        $user = $this->db->findUser($id);

        if ($user) {
            return $user['id'];
        } else {
            throw new Exception('пользователь не найден');
        }
    }


    public function save($data)
    {
        $user = $this->db->insertUser($data);

        if ($user) {
            return $user['id'];
        } else {
            throw new Exception('ошибка записи');
        }
    }
}
