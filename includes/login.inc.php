<?php

// Скрипт авторизации пользователя

global $pdo;
if ($_SERVER["REQUEST_METHOD"] === "POST") { // проверяем действительно ли пользователь вводит данные через форму
    $username = $_POST["username"]; // создаем переменную имени пользователя
    $pwd = $_POST["pwd"]; // создаем переменную пароля

    try {
        // Подключаем MVC файлы
        require_once 'dbh.inc.php'; // подключаем файл подключения к БД
        require_once 'login_model.inc.php'; // подключаем файл модели авторизации
        require_once 'login_contr.inc.php'; // подключаем файл контроллера авторизации

        // Обработчик ошибок

        $errors = [];

        if (is_input_empty($username, $pwd)) { // используем пользовательскую функцию проверки на пустоту введенных данных, реализация в контроллере login_contr.inc.php
            $errors["empty_input"] = "Fill in all fields!";
        }

        $result = get_user($pdo, $username); // переменная с запросом к БД для получения строки с данными по имени пользователя

        // используем пользовательскую функцию проверки имени пользователя, существует ли он в БД, реализация в контроллере login_contr.inc.php
        if (is_username_wrong($result)) {
            $errors["login_incorrect"] = "Incorrect login info!"; // если имя уже существует создаем ошибку
        }

        // делаем проверку, правильно ли введен логин и пароль
        if (!is_username_wrong($result) && is_password_wrong($pwd, $result["pwd"])) {
            $errors["login_incorrect"] = "Incorrect login info!";
        }

        require_once 'config_session.inc.php'; // подключаем конфигурационный файл и запускаем сессию

        if ($errors) { // если были ошибки при логине, сохраняем массив ошибок в $_SESSION["errors_login"], и перенаправляем пользователя снова на индексную страницу
            $_SESSION["errors_login"] = $errors;

            header("Location: ../index.php");
            die(); // останавливаем скрипт
        }

        $newSessionID = session_create_id(); // Создание нового ID сессии (это не обновление старого ID как в session_regenerate_id, а именно пересоздание)
        $sessionID = $newSessionID . "_" . $result["id"]; // создаем модицифированный ID сессии, добавляя к нему ID пользователя с БД
        session_id($sessionID); // обновляем ID сессии на модифицированный

        $_SESSION["user_id"] = $result["id"]; // создаем переменную в сессии user_id с id пользователя с БД
        $_SESSION["user_username"] = htmlspecialchars($result["username"]); // создаем переменную в сессии user_username с именем пользователя с БД, и экранируем чтобы можно было использовать ее на сайте

        $_SESSION['last_regeneration'] = time(); // создаем переменную last_regeneration и присваиваем ей текущее время time()

        header("Location: ../index.php?login=success"); // перенаправляем на индексную страницу с сообщением об успешном логине в GET массиве ?login-success
        $pdo = null; // очищаем соединение с БД
        $stmt = null; // очищаем подготовленный оператор БД

        die(); // останавливаем скрипт

    } catch (PDOException $exception) {
        die("Query failed: " . $exception->getMessage());
    }
} else {
    header("Location: ../index.php"); // если пользователь пытается зайти не через форму, перенаправляем его на начало страницы
    die(); // останавливаем скрипт
}
