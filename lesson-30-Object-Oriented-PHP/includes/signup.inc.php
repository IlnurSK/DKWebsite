<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") { // проверяем действительно ли пользователь вводит данные через форму
    $username = $_POST["username"]; // создаем переменную имени пользователя
    $pwd = $_POST["pwd"]; // создаем переменную пароля

    require_once "../Classes/Dbh.php";
    require_once "../Classes/Signup.php";

    $signup = new Signup($username, $pwd);
    $signup->signupUser();

}