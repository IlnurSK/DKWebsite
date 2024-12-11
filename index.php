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

    function sayHello(string $name = "Basse")
    {
        return "Hello "  . $name . "!". HTML_EOL;
    }

    $test = sayHello("1");
    echo $test;

    function calculator(int $num01, int $num02)
    {
        $result = $num01 + $num02;
        return $result;
    }

    $test = calculator(2,5);
    echo $test . HTML_EOL;

    ?>

</div>
</body>
</html>