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
    # this is a basic for loop
    for ($i = 0; $i <= 10; $i++) {
        echo "This is iteration " . $i;
        echo "<br>";
    };

    echo "<br>";
    # this is a simple while loop
    $boolean = true;
    while ($boolean) {
        echo "The boolean is true!";
        $boolean = false;
    };

    echo "<br>";
    # this is a do while loop, it will no matter what loop at least once not matter if it's true or false
    $test = 10;
    do {
        echo $test;
        $test ++;
    } while ($test < 10);

    echo "<br>";

    $fruits = array("Apple", "Banana", "Orange");
    # this is a for each loop utilising an indexed array.
    foreach ($fruits as $fruit){
        echo "This is a " . $fruit . "<br>";
    };

    echo "<br>";
    # this is a for each loop utilizing an associative array showing both the keys and the values
    $fruits = array("Apple" => "Red", "Banana" => "Yellow", "Orange" => "Orange");
    foreach ($fruits as $fruit => $color){
        echo "This is a " . $fruit . ", that has a color of " . $color ."<br>";
    };
    ?>
    
</body>
</html>