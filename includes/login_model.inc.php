<?php

declare(strict_types=1);

// Функция получения данных из БД по имени пользователя
function get_user(object $pdo, string $username)
{
    $query = "SELECT * FROM users WHERE username = :username;"; // получаем все данные из таблицы пользователец
    $stmt = $pdo->prepare($query); // создаем подготовленный запрос
    $stmt->bindParam(":username", $username); // вставляем параметры в место подстановки
    $stmt->execute(); // выполняем запрос

    $result = $stmt->fetch(PDO::FETCH_ASSOC); // получаем результат в единственном числе (1 строку) (fetch вместо fetchAll), и ввиде ассоциативного массива PDO::FETCH_ASSOC
    return $result;
}
