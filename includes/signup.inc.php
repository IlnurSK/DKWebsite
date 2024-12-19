<?php

// Скрипт регистрации нового пользвателя

if ($_SERVER["REQUEST_METHOD"] === "POST") { // проверяем действительно ли пользователь вводит данные через форму
    $username = $_POST["username"]; // создаем переменную имени пользователя
    $pwd = $_POST["pwd"]; // создаем переменную пароля
    $email = $_POST["email"]; // создаем переменную e-mail

    try {
        // Подключаем MVC файлы
        require_once 'dbh.inc.php'; // подключаем файл подключения к БД
        require_once 'signup_model.inc.php'; // подключаем файл модели регистрации
//        require_once 'signup_view.inc.php'; // подключаем файл представления регистрации
        require_once 'signup_contr.inc.php'; // подключаем файл контроллера регистрации

        // Обработчик ошибок

        $errors = [];

        if (is_input_empty($username, $pwd, $email)) { // используем пользовательскую функцию проверки на пустоту введенных данных, реализация в контроллере signup_contr.inc.php
            $errors["empty_input"] = "Fill in all fields!";
        }
        if (is_email_invalid($email)) { // используем пользовательскую функцию проверки корректного ввода E-MAIL, реализация в контроллере signup_contr.inc.php
            $errors["invalid_email"] = "Invalid email used!";
        }
        if (is_username_taken($pdo, $username)) { // используем пользовательскую функцию проверки наличия имени пользователя в БД, реализация в контроллере signup_contr.inc.php
            $errors["username_taken"] = "Username already taken!";
        }
        if (is_email_registered($pdo, $email)) { // используем пользовательскую функцию проверки наличия электронной почты в БД, реализация в контроллере signup_contr.inc.php
            $errors["email_used"] = "Email already registered!";
        }

        require_once 'config_session.inc.php'; // подключаем конфигурационный файл и запускаем сессию

        if ($errors) { // если были ошибки при регистрации, сохраняем массив ошибок в $_SESSION["errors_signup"], и перенаправляем пользователя снова на индексную страницу
            $_SESSION["errors_signup"] = $errors;

            $signupData = [ // создаем массив внесенных данных пользователем (без пароля), для дальнейшей установки этих данных обратно в форму регистрации при ошибках ввода (чтобы не дублировать пользовательский ввод)
                "username" => $username,
                "email" => $email
            ];
            $_SESSION["signup_data"] = $signupData;

            header("Location: ../index.php");
            die(); // останавливаем скрипт
        }

        create_user($pdo, $username, $pwd, $email); // функция создания нового пользователя в БД, реализация в signup_contr.inc.php

        header("Location: ../index.php?signup=success"); // перенаравляем на индексную страницу с сообщением о успешной регистрации ?signup=success

        $pdo = null; // очищаем соединение с БД
        $stmt = null; // очищаем состояние соединения БД

        die(); // останавливаем скрипт
    } catch (PDOException $exception) {
        die("Query failed: " . $exception->getMessage());
    }
} else {
    header("Location: ../index.php"); // если пользователь пытается зайти не через форму, перенаправляем его на начало страницы
    die(); // останавливаем скрипт
}
