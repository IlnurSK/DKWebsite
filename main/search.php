<?php
declare(strict_types=1);
const HTML_EOL = "<br>\n";

// создаем запрос к БД и отображаем на этой странице


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userSearch = $_POST["usersearch"];

    try {
        require_once "includes/dbh.inc.php";

     // Создаем запрос

        $query = "SELECT * FROM comments WHERE username = :usersearch;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":usersearch", $userSearch);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;

    } catch (PDOException $exception) {
        die("Query failed: " . $exception->getMessage());
    }
} else {
    header("Location: ../index.php");
}


?>


<!--Копия стартовой страницы-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<section>
    <div class="wrapper-main">

        <h3>Search results:</h3>

        <?php

        if (empty($results)) {
            echo "<div class='search'>";
            echo "<p>There were no results!</p>";
            echo "</div>";
        } else {
            foreach ($results as $row) {
                echo "<div class='search'>";
                echo "<h4>" . htmlspecialchars($row["username"]) . "</h4>";
                echo "<p>" . htmlspecialchars($row["comment_text"]) . "</p>";
                echo "<p>" . htmlspecialchars($row["created_at"]) . "</p>";
                echo "</div>";
            }
        }

        ?>
    </div>
</section>
</body>
</html>