<?php

declare(strict_types=1);

// Функция отображения имени пользователя после авторизации на индексной странице
function output_username(): void
{
    if (isset($_SESSION["user_id"])) {
        echo "You are logged in as " . $_SESSION["user_username"];
    } else {
        echo "You are not logged in";
    }
}

// Функция проверки наличия ошибок при логине
function check_login_errors(): void
{
    if (isset($_SESSION["errors_login"])) { // если в массиве $_SESSION["errors_login"] есть переменные ошибок, выводим ее
        $errors = $_SESSION["errors_login"];

        echo "<br>";
        foreach ($errors as $error) {
            echo '<p class="form-error">' . $error . '</p>';
        }

        unset($_SESSION["errors_login"]); // очищаем массив ошибок при регистрации
    } elseif (isset($_GET['login']) && $_GET['login'] === "success") { // проверяем есть ли сообщение о успешном логине в GET массиве
        echo '<br>';
        echo '<p class="form-success">Login success!</p>';
    }
}
