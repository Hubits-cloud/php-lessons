<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
    # test is in the global scope and can be accesed anywhere within this page. If you want to use a global var in a function or class, you need to pass in the parameter
    $test = "Tobias";

    echo $test;
    
    echo"<br>";

    function myFunction(){
        # localVar is in the local scope meaning, that it is undefined outside if this function
        $localVar = "Hello, World!";

        return $localVar;
    }

    echo myFunction();

    echo "<br>";
    # normally when a function has been passed, all the data from the vars get reset, but if you declare them as static then they get shared across all functions of the same name and saves the previous data
    function myFunction2(){
        static $staticVar = "0";
        $staticVar++;
        return $staticVar;
    }

    echo myFunction2();
    echo myFunction2();
    echo myFunction2();

    echo "<br>";
    # this is a class scope, all variables and functions within this class, can't be used outside of this class
    class myClass {
        public $classVar = "Hello, World!";

        public function myMethod(){
            echo $this->classVar;
        }
    }

    ?>
</body>
</html>