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

    $bool = true;
    $a = "1";
    $b = 4;

    $result = match ($a) {
        1, 3, 5 => "Variable a is equal to one!",
        2 => "Variable a is equal to two!",
        default => "None were a match",
    };

    echo $result;

    switch ($a) {
        case 1:
            echo "The first case is correct";
            break;
        case 2:
            echo "The second case is correct";
            break;
        case 3:
            echo "The third case is correct";
            break;
        default:
            echo "None of the conditions were true!";
    }

    if ($a < $b && !$bool) {
        echo "First condition is true!";
    } elseif ($a < $b && $bool) {
        echo "Second condition is true!";
    } else {
        echo "None of the conditions were true!";
    }

    ?>

</body>
</html>