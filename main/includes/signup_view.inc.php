<?php

declare(strict_types=1);

// Функция отображения полей ввода при регистрации
function signup_inputs(): void
{
    // проверяем ввели ли ранее имя пользователя в $_SESSION["signup_data"]["username"] и не было ли ошибок совпадений имени пользователя в БД $_SESSION["errors_signup"]["username_taken"]
    if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])) {
        echo '<input type="text" name="username" placeholder="Username" value="' . $_SESSION["signup_data"]["username"] . '">'; // отображаем поле ввода имени пользователя, и заполняем данными через value
    } else {
        echo '<input type="text" name="username" placeholder="Username">'; // иначе отображаем пустую форму ввода имени
    }

    echo '<input type="password" name="pwd" placeholder="Password">'; // отображаем пустую форму ввода для пароля

    // проверяем ввели ли ранее email в  $_SESSION["signup_data"]["email"] и не было ли ошибок совпадений электронной почты в БД $_SESSION["errors_signup"]["email_used"] и ошибок неправильного ввода email - $_SESSION["errors_signup"]["invalid_email"]
    if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"])
    && !isset($_SESSION["errors_signup"]["invalid_email"])) {
        echo '<input type="text" name="email" placeholder="E-Mail" value="' . $_SESSION["signup_data"]["email"] . '">'; // отображаем поле ввода email, и заполняем данными через value
    } else {
        echo '<input type="text" name="email" placeholder="E-Mail">'; // иначе отображаем пустую форму ввода email
    }
}

// Функция проверки наличия ошибок при регистрации
function check_signup_errors(): void
{
    if (isset($_SESSION["errors_signup"])) { // если в массиве $_SESSION["errors_signup"] есть переменные ошибок, выводим ее
        $errors = $_SESSION["errors_signup"];

        echo "<br>";
        foreach ($errors as $error) {
            echo '<p class="form-error">' . $error . '</p>';
        }

        unset($_SESSION["errors_signup"]); // очищаем массив ошибок при регистрации
    } elseif (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo '<br>';
        echo '<p class="form-success">Signup success!</p>';
    }
}
