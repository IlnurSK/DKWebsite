<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="wrapper-main">

    <?php
    const HTML_EOL = "<br>\n";
    $fruits = array("Apple", "Banana", "Cherry");
    $fruits = [
            "Apple", // 0
            "Banana", // 1
            "Cherry" // 2
    ];

    $fruits[] = "Orange";

    echo $fruits[3] . HTML_EOL;

//    unset($fruits[1]);
    array_splice($fruits, 0,1);

    echo $fruits[1] . HTML_EOL;

    $tasks = [
            "laundry" => "Daniel",
        "trash" => "Frida",
        "vacuum" => "Basse",
        "dishes" => "Bella"
    ];

    echo $tasks["laundry"] . HTML_EOL;
    print_r($tasks["laundry"]);
    echo HTML_EOL;

    echo count($tasks) . HTML_EOL;

//    sort($tasks);
//    print_r($tasks);
//    echo HTML_EOL;

    $fruits = array("Apple", "Banana", "Cherry");
    array_push($fruits, "Mango");
    print_r($fruits);
    echo HTML_EOL;

    $tasks["dusting"] = "Tara";
    print_r($tasks);
    echo HTML_EOL;

    $fruits = ["Apple", "Banana", "Cherry"];
    $test = ["Mango", "Strawberry"];

    array_splice($fruits, 2,0,$test);
    print_r($fruits);
    echo HTML_EOL;


    $food = [
            array("apple", "mango"),
        "banana",
        "cherry"
    ];

    echo $food[0][0] . HTML_EOL;

    $food = [
        "fruits" => array("apple", "banana", "cherry"),
        "meat" => array("chicken", "fish"),
        "vegetables" => [
                "cucumber" => 2,
                "carrot" => 3
        ]
    ];

    echo $food["vegetables"]["cucumber"] . HTML_EOL;

    ?>

</div>
</body>
</html>