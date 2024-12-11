<?php
declare(strict_types=1);
?>
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
<div class="wrapper-main">

    <?php
    const HTML_EOL = "<br>\n";

    // Scope - Области видимости

   $test = "Il'nur";

   echo $test . HTML_EOL;

    function myFunction()
    {
        // Define a local variable
        $localVar = "Hello, world!";

        // Use the local variable
        return $localVar; // Output: Hello, world!
   }

   echo myFunction() . HTML_EOL;
//    echo $localVar . PHP_EOL; // Warning: Undefined variable $localVal


    // доступ к глобальной переменной через ключевое слово "global"

    $test = "Il'nur";

    function myFunction2()
    {
        global $test;

        // Define a local variable
        $localVar = "Hello, world!";

        // Use the local variable
        return $test;
    }

    echo myFunction2() . HTML_EOL;

    // доступ к глобальной переменной через массив глобальных переменных $GLOBALS

    $test = "Il'nur";

    function myFunction3()
    {
        // Define a local variable
        $localVar = "Hello, world!";

        // Use the local variable
        return $GLOBALS["test"];
    }

    echo myFunction3() . HTML_EOL;

    // статическая область видимости

    function myFunctionStatic()
    {
        // Declare a static variable
        static $staticVar = 0;

        // Increment the static variable
        $staticVar++;

        // Use the static variable
        return $staticVar;
    }

    echo myFunctionStatic() . HTML_EOL;
    echo myFunctionStatic() . HTML_EOL;
    echo myFunctionStatic() . HTML_EOL;

    // Области видимости объектов

    class MyClass
    {
        // Define a class variable
        public $classVar  = "Hello, world!";

        // Define a class method
        public function myMethod()
        {
            // Use the class variable
            echo $this->classVar; // Output: Hello, world!
        }
    }

    echo (new MyClass())->classVar . HTML_EOL;


    ?>

</div>
</body>
</html>