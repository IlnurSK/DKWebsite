<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sirazhev Ilnur Portfolio</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <?php
    // String operator

    $a = "Hello";
    $b = "World";
    $c = $a . $b;
    echo $c . "<br>";

    // Logical operators

    $a = 4;
    $b = 4;

    $c = 2;
    $d = 6;

    if ($a == $b || $c == $d && $a == $c) {
        echo "This statement is true!". "<br>";
    }

    // Incrementing/decrementing operators

    $a = 1;
    echo $a . "<br>";

    echo ++$a . "<br>";
    echo $a . "<br> <br>";

    echo --$a . "<br>";
    echo $a . "<br> <br>";

    echo $a++ . "<br>";
    echo $a . "<br> <br>";

    ?>

</body>
</html>