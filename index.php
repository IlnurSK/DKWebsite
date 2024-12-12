<?php
declare(strict_types=1);
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
    const HTML_EOL = "<br>\n";

    // SELECT & JOIN Database Table Data in MySQL

    /* Получение данных из таблицы через SELECT
    SELECT username, email FROM users WHERE id = 2;
    SELECT username, comment_text FROM comments WHERE users_id = 1;
    SELECT * FROM comments WHERE users_id = 1;

    Получение данных через объединение двух таблиц JOIN
    SELECT * FROM users INNER JOIN comments ON users.id = comments.users_id;
    SELECT users.username, comments.comment_text, comments.created_at FROM users INNER JOIN comments ON users.id = comments.users_id;
    SELECT * FROM users LEFT JOIN comments ON users.id = comments.users_id;
    SELECT * FROM users RIGHT JOIN comments ON users.id = comments.users_id;
     */



    ?>

</div>
</body>
</html>