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

<?php

    echo $_SERVER["DOCUMENT_ROOT"] . "<br>";
    echo $_SERVER["PHP_SELF"] . "<br>";
    echo $_SERVER["SERVER_NAME"] . "<br>";
    echo $_SERVER["REQUEST_METHOD"] . "<br>";
    echo $_GET["name"] . "<br>";
    echo $_GET["lastname"] . "<br>";
    echo $_REQUEST["name"] . "<br>";
    echo $_FILES["name"] . "<br>";
    echo $_COOKIE["name"] . "<br>";
    $_SESSION["username"] = "GEX";
    echo $_SESSION["username"] . "<br>";
    $_ENV[""];

?>

</body>
</html>