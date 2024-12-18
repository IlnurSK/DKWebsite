<?php

declare(strict_types=1);

// Создаем функцию проверки - введены ли данные пользователем
function is_input_empty(string $username, string $pwd, string $email)
{
    if (empty($username) || empty($pwd) || empty($email)) {
        return true;
    } else {
        return false;
    }
}

// Создаем функцию проверки - действительна ли введенная электронная почта
function is_email_invalid(string $email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // проверяем через filter_var, является ли введенная почта FILTER_VALIDATE_EMAIL
        return true;
    } else {
        return false;
    }
}

// Создаем функцию проверки - существует ли такой пользователь в БД
function is_username_taken(object $pdo, string $username)
{
    if (get_username($pdo, $username)) { // функция получения имени пользователя из БД, реализовываем в модели - signup_model.inc.php
        return true;
    } else {
        return false;
    }
}

// Создаем функцию проверки - зарегистрирована ли электронная почта в БД
function is_email_registered(object $pdo, string $email)
{
    if (get_email($pdo, $email)) { // функция получения электронной почты из БД, реализовываем в модели - signup_model.inc.php
        return true;
    } else {
        return false;
    }
}

// Функция создания нового пользователя с сохранением в БД
function create_user(object $pdo, string $username, string $pwd, string $email)
{
    set_user($pdo, $username, $pwd, $email); // функция установки пользователя, реализовываем в модели - signup_model.inc.php
}

