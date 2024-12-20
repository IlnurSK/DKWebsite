<!--Базовые принципы ООП-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="includes/signup.inc.php" method="post">
    <input type="text" name="username">
    <input type="password" name="pwd">
    <button>Signup</button>
</form>

<?php

// Функционально программирование
//$brand = "Volvo";
//$color = "Green";
//
//function getCarInfo($brand, $color)
//{
//    return "Brand: " . $brand . ", Color: " . $color;
//}
//
//echo getCarInfo($brand, $color);

//// ООП
//require_once 'Classes/Car.php';
//
//$car01 = new Car("BMW", "green");
//echo $car01->getCarInfo();
//echo "<br>";
//echo $car01->getBrand();
//
//$car01->setBrand("Volvo");
//echo "<br>";
//echo $car01->getBrand();
//
//$car01->setColor("white");
//echo "<br>";
//echo $car01->getColor();


?>

</body>
</html>