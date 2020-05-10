<?php

$success = '';
$error = '';
$name = '';
$age = '';
$email = '';

if (!empty($_POST)) {
    try {
        $success = (new UserFormValidator())->validate($_POST);

        $error = '';
    } catch (\Exception $e) {
        $error = $e->getMessage();
    }finally{
        $name = $_POST['name'];

        $age = $_POST['age'];
        
        $email = $_POST['email'];
    }

}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>Валидация</title>

    <link rel="stylesheet" href="/template/style/styles.css">
</head>

<body>
    <form class="contact_form" method="post" name="contact_form">
        <ul>
            <li>
                <h2>Регистрация</h2>

                <span class="required_notification">* Обязательное Поле</span>
            </li>
            <li>
                <label for="name">Имя:</label>

                <input type="text" name="name" placeholder="имя" value="<?= $name ?>" />
            </li>

            <li>
                <label for="age">Возраст:</label>

                <input type="number" name="age" placeholder="возраст" value="<?= $age ?>" />
            </li>

            <li>
                <label for="email">Email:</label>

                <input type="text" name="email" placeholder="адрес@example.com" value="<?= $email ?>" />
            </li>

            <li>
                <button class="submit" type="submit">Зарегистрировать</button>
            </li>
        </ul>
    </form>

    <pre class="error_registration message"><?= $error ?></pre>

    <pre class="success_registration message"><?= 'id пользователя:' . $success ?></pre>



</body>

</html>