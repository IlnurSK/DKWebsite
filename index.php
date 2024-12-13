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
<!--Создаем форму для поиска данных в БД-->

    <form class="searchform" action="search.php" method="post">

        <label for="search">Search for user:</label>
        <input type="text" name="usersearch" placeholder="Search..." id="search">
        <button>Search</button>
    </form>


    <?php
    // Получения данных с БД с веб-формы


    ?>

</div>
</body>
</html>