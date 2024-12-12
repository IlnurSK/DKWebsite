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

    // INSERT, UPDATE & DELETE to Change Table Data
    /* Втавка данных через INSERT в БД
     * INSERT INTO users (username, pwd, email) VALUES ('Sirazhev', 'qwerty', 'sirazhev@mail.ru');
     * INSERT INTO comments (username, comment_text, users_id) VALUES ('Sirazhev', 'This is a comment on a website', 1);
     *
     * Изменение данных через UPDATE
     * UPDATE users SET username = 'Ivanov333', pwd = 'Ivanov444' WHERE id = 2;
     *
     * Удаление данных через DELETE
     * DELETE FROM users WHERE id = 1;
     */



    ?>

</div>
</body>
</html>