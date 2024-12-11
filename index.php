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
    const HTML_EOL = "<br>\n"; // а вот и ондна из них :)

    // Constants - Константы

    $name = "Il'nur";
    $name = "Daniel";
    echo $name . HTML_EOL;

    define("PI", 3.14); // стандартный метод определения констант
    const USER_NAME = "Il'nur"; // алтьтернативный метод определения констант

    echo PI . HTML_EOL;
    echo USER_NAME . HTML_EOL;

//    define("PI", 4.14); // Выведет Warning

    define("NAME", "Il'nur");
    define("IS_ADMIN", true);

    function test()
    {
        echo PI . HTML_EOL;
    }

    test();

    ?>

</div>
</body>
</html>