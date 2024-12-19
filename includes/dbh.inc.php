<?php

// Подключение к БД с помощью PDO

$host = 'localhost';
$dbname = 'myfirstdatabase';
$dbusername = "root";
$dbpassword = "";

try { // Проверка на ошибки подключения к БД
    $pdo =  new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // атрибуты соединения с PDO (PDO::ATTR_ERRMODE  - атрибут режима отображения ошибок, PDO::ERRMODE_EXCEPTION - его параметр)
} catch (PDOException $e) {
//    echo "Connection failed: " . $e->getMessage();
    die("Connection failed: " . $e->getMessage()); // вывод ошибки подключения
}
