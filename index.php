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

    // встроенные функции для работы со строками

    $string = "Hello World!";

    echo strlen($string) . HTML_EOL;
    echo strpos($string, "Wo") . HTML_EOL;
    echo str_replace("World", "Daniel", $string) . HTML_EOL;
    echo strtolower($string) . HTML_EOL;
    echo strtoupper($string) . HTML_EOL;
    echo substr($string, 2, -2) . HTML_EOL;
    print_r(explode(" ", $string)); echo HTML_EOL;

    // встроенные функции для работы с числами

    $number = -5.5;

    echo abs($number) . HTML_EOL;
    echo round($number) . HTML_EOL;
    echo pow(2, 3) . HTML_EOL;
    echo sqrt(16) . HTML_EOL;
    echo rand(1, 100) . HTML_EOL;

    // встроенные функции для работы с массивами

    $array = ["apple", "banana", "orange"];

    echo count($array) . HTML_EOL;
    echo is_array($array) . HTML_EOL;
    array_push($array, "kiwi");
    print_r($array); echo HTML_EOL;
    array_pop($array);
    print_r($array); echo HTML_EOL;
    print_r(array_reverse($array)); echo HTML_EOL;

    $array1 = ["apple", "banana", "orange"];
    $array2 = ["kiwi"];

    print_r(array_merge($array1, $array2)); echo HTML_EOL;

    // встроенные функции для работы с датой и временем

    echo date("Y-m-d H:i:s") . HTML_EOL;
    echo time() . HTML_EOL;

    $date = "2023-04-11 12:00:00";
    echo strtotime($date) . HTML_EOL;

    ?>

</div>
</body>
</html>