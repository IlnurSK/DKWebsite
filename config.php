<?php

// Конфигурирование параметров сервера

ini_set('session.use_only_cookies', 1); // использование только куков
ini_set('session.use_strict_mode', 1); // использование только строгого типа данных declare(strict_types=1);

session_set_cookie_params([
   'lifetime' => 1800, // время жизни для куков в секундах 1800 сек = 30 минут
    'domain' => 'localhost', // домен в котором работают куки (example.com)
    'path' => '/', // указывает на путь внутри вашего домена ('/' - любой каталог домена)
    'secure' => true, // гарантирует что куки работают только в https соединении (не в http)
    'httponly' => true // ограничивает доступ к скриптам в браузере
]);

session_start(); // создаем сессию

//session_regenerate_id(true); // пересоздание ID сессии в более надежный вариант

// Автоматическое пересоздание ID сессии в более надежный вариант (каждые 30 минут)

if (!isset($_SESSION['last_regeneration'])) { // проверям была ли создана ли переменная сессии (last_regeneration), если нет то создаем (то есть это проверка на запуск страницы в первые)

    session_regenerate_id(true); // пересоздание ID сессии в более надежный вариант
//    session_create_id(); // рученое создание ID сессии для пользователя, например для улучшения безопасности с сохранением данного ID в БД
    $_SESSION['last_regeneration'] = time(); // создаем переменную last_regeneration и присваиваем ей текущее время time()
} else {

    $interval = 60 * 30; // создаем интервал 1800 сек, то есть 30 минут

    if (time() - $_SESSION['last_regeneration'] >= $interval) { // если сессия была создана более 30 минут назад, пересоздаем сессию

        session_regenerate_id(true); // пересоздание ID сессии в более надежный вариант
        $_SESSION['last_regeneration'] = time(); // обновляем last_regeneration и присваиваем ей текущее время time()
    }
}