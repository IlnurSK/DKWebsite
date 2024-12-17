<?php
declare(strict_types=1);

session_start(); // Запуск сессии
const HTML_EOL = "<br>\n";

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

    // Копия индексной страницы для урока с сессиями


    echo $_SESSION["username"];


    ?>

</div>
</body>
</html>