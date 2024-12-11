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

    // Создание базы данных в MySQL (заходим на localhost/phpmyadmin/)
    /* Типы данных
     * INT -2147483648 - 2147483647 (числовые 4 байта)
     * BIGINT (числовые 8 байт)
     * INT(11) - в скобках ограничение на ширину символов при отображении данных
     * FLOAT - числа с плавающей точкой (4 байта)
     * DOUBLE - числа с плавающей точкой (8 байт)
     * VARCHAR(30) - текстовый тип данных, в скобках ограничение по количеству сохраняемых символов (255 - для большинства БД)
     * TEXT - большой объем текстовых данных (сообщения, публикации, статьи)
     * DATE 2023-05-14 - Даты
     * DATETIME 2023-05-14 11:30:00
     * INT(11) SIGNED/UNSIGNED - позволяет хранить только положительные числа     *
     */

    // Создаем таблицу USERS
    /*
    CREATE TABLE users (
    id INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    pwd VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
    PRIMARY KEY (id)
);
    */

    // Создаем таблицу COMMENTS
    /*
    CREATE TABLE comments (
	id INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    comment_text TEXT NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
    users_id INT(11),
    PRIMARY KEY (id),
    FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE SET NULL
);
     */


    ?>

</div>
</body>
</html>