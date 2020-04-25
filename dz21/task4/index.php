<?php

require $_SERVER['DOCUMENT_ROOT'] . '/task4/User.php';
require $_SERVER['DOCUMENT_ROOT'] . '/task4/Notification.php';

$user_1 = new User('пользователь с телефоном (25 лет)', 'email_1', 25, 'it', '111-111-111');
echo $user_1->notify('здесь выражение норма... ') . '<br>';

$user_2 = new User('пользователь без телефона (25 лет)', 'email_2', 25, 'it');
echo $user_2->notify('здесь выражение норма... ') . '<br>';

$user_3 = new User('пользователь  (25 лет) не цензурное выражение', 'email_3', 25, 'it');
echo $user_3->notify('здесь выражение не норма... _уй... ') . '<br>';

$user_4 = new User('пользователь с телефоном (15 лет)', 'email_4', 15, 'it', '444-444-444');
echo $user_4->notify('здесь выражение норма... ') . '<br>';

$user_5 = new User('пользователь без телефона (15 лет)', 'email_5', 15, 'it');
echo $user_5->notify('здесь выражение норма... ') . '<br>';

$user_6 = new User('пользователь  (15 лет) не цензурное выражение', 'email_6', 15, 'it');
echo $user_6->notify('здесь выражение не норма... _уй... ') . '<br>';

echo '<hr>
        <a href="/">назад</a>';
