<?php

declare(strict_types=1);

// Функция проверки - не введены ли данные пользователем
function is_input_empty(string $username, string $pwd): bool
{
    if (empty($username) || empty($pwd)) {
        return true;
    } else {
        return false;
    }
}

// Функция проверки имени пользователя в БД
function is_username_wrong(bool|array $result): bool // комбинируем типы данных bool|array
{
    if (!$result) {
        return true;
    } else {
        return false;
    }
}

// Функция проверки пароля в БД
function is_password_wrong(string $pwd, string $hashedPwd): bool
{
    if (!password_verify($pwd, $hashedPwd)) { // проверяем НЕ совпадают ли пароли
        return true;
    } else {
        return false;
    }
}