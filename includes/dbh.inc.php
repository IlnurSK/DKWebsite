<?php

// Подключение к БД с помощью PDO

//$dsn = "mysql:host=localhost;dbname=myfirstdatabase";
$host = 'localhost';
$dbname = 'myfirstdatabase';
$dbusername = "root";
$dbpassword = "";

try {
    $pdo =  new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
