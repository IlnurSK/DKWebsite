<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";

        // подготовленный запрос в БД

//        $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";
//
//        $stmt = $pdo->prepare($query);
//
//        $stmt->execute([$username, $pwd, $email]);

        // альтернативный вариант подготовленного запроса

        $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";

        $stmt = $pdo->prepare($query);

        // добавляем алгоритм хэширования для сохранения пароля в БД

        $options = [ // параметр для усиления хэширования, подается в виде массива, рекомендуемые значения 10-12
            'cost' => 12
        ];

        $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options); // хэшируем пароль используя алгоритм PASSWORD_BCRYPT с опциями, который можно сохранить в БД

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $hashedPwd); // сохраняем в БД хэшированный пароль
        $stmt->bindParam(":email", $email);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();

    } catch (PDOException $exception) {
        die("Query failed: " . $exception->getMessage());
    }
} else {
    header("Location: ../index.php");
}
