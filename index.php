<?php
declare(strict_types=1);
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
<!--Создаем форму регистрации с базовыми полями-->
    <h3>Signup</h3>

    <form action="includes/formhandler.inc.php" method="post">
        <input type="text" name="username" placeholder="Username" id="username">
        <label for="username"></label>
        <input type="text" name="pwd" placeholder="Password" id="pwd">
        <label for="pwd"></label>
        <input type="text" name="email" placeholder="E-Mail" id="email">
        <label for="email"></label>
        <button type="submit">Signup</button>
    </form>


    <?php
    // Отправка данных с веб-сайта через метод POST в БД

    // Создаем обработчик формы -> создаем файл includes/formhandler.inc.php


    ?>

</div>
</body>
</html>