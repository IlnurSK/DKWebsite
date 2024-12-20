<?php

declare(strict_types=1);

// Функция получения имени пользователя с БД
function get_username(object $pdo, string $username)
{
    $query = "SELECT username FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC); // получаем результат в единственном числе (fetch вместо fetchAll), и ввиде ассоциативного массива PDO::FETCH_ASSOC
    return $result;
}

// Функция получения электронной почты с БД
function get_email(object $pdo, string $email)
{
    $query = "SELECT email FROM users WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC); // получаем результат в единственном числе (fetch вместо fetchAll), и ввиде ассоциативного массива PDO::FETCH_ASSOC
    return $result;
}

// Функция сохранения данных нового пользователя в БД

function set_user(object $pdo, string $username, string $pwd, string $email)
{
    $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";
    $stmt = $pdo->prepare($query);

    // добавляем алгоритм хэширования для сохранения пароля в БД
    $options = [ // параметр для усиления хэширования, подается в виде массива, рекомендуемые значения 10-12
        'cost' => 12
    ];

    $hashedPwd = password_hash(
        $pwd,
        PASSWORD_BCRYPT,
        $options
    ); // хэшируем пароль используя алгоритм PASSWORD_BCRYPT с опциями, который можно сохранить в БД

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pwd", $hashedPwd); // сохраняем в БД хэшированный пароль
    $stmt->bindParam(":email", $email);
    $stmt->execute();
}