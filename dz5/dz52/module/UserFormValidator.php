<?php

class UserFormValidator
{
    public function validate(array $data)
    {
        $error = '';
        if (!array_key_exists('name', $data)) {
            $error .= 'отсутствует имя' . PHP_EOL;
        } elseif (empty(trim($data['name']))) {
            $error .= '"Имя" не может быть пустым' . PHP_EOL;
        }

        if (!array_key_exists('age', $data)) {
            $error .= 'отсутствует возраст' . PHP_EOL;
        } elseif ($data['age'] < 18) {
            $error .= 'Ваш возраст меньше 18 лет. Ай-ай-ай..' . PHP_EOL;
        }

        if (!array_key_exists('email', $data)) {
            $error .= 'отсутствует email' . PHP_EOL;
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $error .= 'Не правильный формат email' . PHP_EOL;
        }

        if (empty($error)) {
            return true;
        } else {
            throw new Exception($error);
        }
    }
}
