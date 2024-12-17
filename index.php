<?php
declare(strict_types=1);

// Создание сессий

session_start(); // Запуск сессии
const HTML_EOL = "<br>\n";

$_SESSION["username"] = "Sirazhev"; // Внесение данных в сессию

//unset($_SESSION["username"]); // Удаление данных из сессии

//session_unset(); // Удаление всех данных из сессий

session_destroy(); // Уничтожение ID сессии (сработает при выходе из скрипта, например на другую страницу)

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

    <?php

    echo $_SESSION["username"];

    ?>

</div>
</body>
</html>