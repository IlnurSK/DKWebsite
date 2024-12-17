<?php

//// Базовый алгоритм хэширования информации
//
//$sensitiveData = "Sirazhev"; // информация которая будет хэшироваться
//$salt = bin2hex(random_bytes(16)); // генерация случайных байтов, в данном случае 16 (соль)
//$pepper = "ASecretPepperString"; // случайная строка, которая будет добавляться в хешировании (перец)
//
////echo "<br>" . $salt;
//
//$dataToHash = $sensitiveData . $salt . $pepper; // создаем комбинированный хэш
//$hash = hash("sha256", $dataToHash); // хэшируем данные по алгоритму sha256
//
////echo "<br>" . $hash;
//
//// Проверка хэшированных данных на изменение (не используется дехэширование)
//
//$sensitiveData = "Sirazhev";
//
//$storedSalt = $salt; // доставем хэш соль например из БД
//$storedHash = $hash; // доставем хэш данные например из БД
//$pepper = "ASecretPepperString"; // перец (ключ)
//
//$dataToHash = $sensitiveData . $storedSalt . $pepper;
//
//$verificationHash = hash("sha256", $dataToHash);
//
//if ($storedHash === $verificationHash) { // проверка на совпадение данных
//    echo "The data are the same!";
//    echo "<br>";
//    echo $storedHash;
//    echo "<br>";
//    echo $verificationHash;
//} else {
//    echo "The data are not the same!";
//}

// Хэширование паролей с помощью встроенных функций PHP

$pwdSignup = "Sirazhev"; // пользовательский пароль

$options = [ // параметр для усиления хэширования, подается в виде массива, рекомендуемые значения 10-12
    'cost' => 12
];

$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options); // хэшируем пароль используя алгоритм PASSWORD_BCRYPT с опциями, который можно сохранить в БД

$pwdLogin = "Sirazhev2"; // пользователь логинится
password_verify($pwdLogin, $hashedPwd); // проверка хэшированного пароля

if (password_verify($pwdLogin, $hashedPwd)) { // проверка хэшированного пароля
    echo "They are the same!";
} else {
    echo "They are not the same!";
}