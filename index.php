<?php
require_once 'includes/signup_view.inc.php'; // подключаем представление формы регистрации
require_once 'includes/config_session.inc.php'; // подключаем конфигурационный файл сессий
require_once 'includes/login_view.inc.php'; //подключаем представление формы логина

// Создание системы входа на сайт (авторизация)


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="wrapper-main">

    <!--Форма отображения имени пользователя если он залогинился-->
    <h3>
        <?php

        output_username(); // функция отображения имени пользователя, реализация в представлении login_view.inc.php

        ?>
    </h3>

    <!--Форма авторизации-->
    <?php
   if (!isset($_SESSION["user_id"])) { ?> <!-- реализуем логику отображения формы в зависимости от статуса (залогинен/не залогинен)      -->

        <h3>Login</h3>

        <form action="includes/login.inc.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <button>Login</button>
        </form>
    <?php } ?>


    <?php
    check_login_errors(); // функция проверки на ошибки при логине, реализовываем в представлении login_view.inc.php
    ?>

    <!--Форма регистрации-->
    <?php
    if (!isset($_SESSION["user_id"])) { ?> <!-- реализуем логику отображения формы в зависимости от статуса (залогинен/не залогинен)      -->

        <h3>Signup</h3>

        <form action="includes/signup.inc.php" method="post">
            <?php
            signup_inputs(); // отображение формы регистрации, реализовываем в представлении signup_view.inc.php
            ?>
            <button>Signup</button>
        </form>
    <?php } ?>


    <?php
    check_signup_errors(); // функция проверки при регистрации, реализовываем в представлении signup_view.inc.php

    ?>

    <!--Форма выхода из системы-->
    <?php
    if (isset($_SESSION["user_id"])) { ?> <!-- реализуем логику отображения формы в зависимости от статуса (залогинен/не залогинен)      -->

        <h3>Logout</h3>

        <form action="includes/logout.inc.php" method="post">
            <button>Logout</button>
        </form>
    <?php } ?>

</div>
</body>
</html>