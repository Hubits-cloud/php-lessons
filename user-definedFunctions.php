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
    <title>usr defined functions</title>
</head>
<body>
    <?php
    # function that returns hello world into a var
    strlen("tobias");

    function helloWorld() {
        return"Hello World!";
    };

    $test = helloWorld();
    echo "$test";

    echo"<br>";
    #requires a piece of date and places that data in $name
    function sayHello($name){
        return"Hello " . $name . "!";
    };

    $greeting = sayHello("Tobias");
    echo $greeting;

    echo "<br>";
    # in this case $name has a placeholder in case of no data, that placeholder being User
    function sayHello1($name = "User"){
        return"Hello " . $name . "!";
    };

    $greeting = sayHello1();
    echo $greeting;

    echo "<br>";
    # now the submitted data has to be a string otherwise it will return an error
    function sayHello2(string $name = "User"){
        return"Hello " . $name . "!";
    };

    $greeting = sayHello2("Tobias Belling");
    echo $greeting;

    echo "<br>";
    # you can also require two pieces of data for a function
    function addition(int $num01, int $num02){
        $result = $num01 + $num02;
        return $result;
    }

    $added = addition(31,134);
    echo $added;

    echo "<br>";

    $global = 0;
    # used the global tag to call in a global var into the local scope
    function calc(int $num01, int $num02){
        global $global;
        $global = $num01 + $num02;
        return $global;
    };

    $added = calc(123,54);
    echo $added;

    ?>
    
</body>
</html>