<?php
require_once 'includes/signup_view.inc.php'; // подключаем представление формы регистрации
require_once 'includes/config_session.inc.php'; // подключаем конфигурационный файл сессий

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

    <!--Форма авторизации-->

    <h3>Login</h3>

    <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>Login</button>
    </form>

<!--Форма регистрации-->

   <h3>Signup</h3>

    <form action="includes/signup.inc.php" method="post">
        <?php
        signup_inputs(); // отображение формы регистрации, реализовываем в представлении signup_view.inc.php
        ?>
        <button>Signup</button>
    </form>

    <?php
    check_signup_errors(); // функция проверки при регистрации, реализовываем в представлении signup_view.inc.php

    ?>

</div>
</body>
</html>