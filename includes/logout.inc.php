<?php

// Реализация логики выхода из системы

// Очищаем и удаляем сессию
session_start();
session_unset();
session_destroy();

header("Location: ../index.php"); // перенаправляем его на начало страницы
die(); // останавливаем скрипт