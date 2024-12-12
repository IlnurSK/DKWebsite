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
<!--Создаем форму для изменения и удаления регистрационных данных-->
    <h3>Change account</h3>

    <form action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="Username" id="username">
        <label for="username"></label>
        <input type="password" name="pwd" placeholder="Password" id="pwd">
        <label for="pwd"></label>
        <input type="email" name="email" placeholder="E-Mail" id="email">
        <label for="email"></label>
        <button>Update</button>
    </form>

    <h3>Delete account</h3>

    <form action="includes/userdelete.inc.php" method="post">
        <input type="text" name="username" placeholder="Username" id="username">
        <input type="password" name="pwd" placeholder="Password" id="pwd">
        <button>Delete</button>
    </form>


    <?php
    // Удаление и редактирование данных в БД с веб-формы

    // Создаем обработчикики формы includes/userupdate.inc.php и includes/userdelete.inc.php


    ?>

</div>
</body>
</html>