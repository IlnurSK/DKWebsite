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

    // Loops - Циклы

    // For
    for ($i = 0; $i <= 10; $i++)
    {
        echo "This is iteration number " . $i . HTML_EOL;
    }

    // While
    $boolean = true;
    while ($boolean) {
        echo $boolean . HTML_EOL;
        $boolean = false;
    }

    // Do While

    $test = 10;
    do {
        echo $test . HTML_EOL;
        $test++;
    } while ($test < 10);

    // Foreach

    $fruits = array("Apple", "Banana", "Orange");

    foreach ($fruits as $fruit) {
        echo "This is a " . $fruit . HTML_EOL;
    }

    $fruits2 = [
            "Apple" => "Red",
        "Banana" => "Yellow",
        "Orange" => "Orange"
    ];

    foreach ($fruits2 as $fruit => $color) {
        echo "This is a " . $fruit . ", that has a color of " . $color . HTML_EOL;
    }

    ?>

</div>
</body>
</html>