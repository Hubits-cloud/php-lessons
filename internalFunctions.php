<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internal Functions</title>
</head>
<body>
    <?php
    # STRING VARIABLES
    $string = "Hello World!";
    $string1 = "Hel lo Wor ld!";

    # NUMERICAL VARIABLES
    $number = -5.5;

    # ARRAY VARIABLES
    $array = [
        "apple",
        "banana",
        "orange"    
    ];

    # makes another array with kiwi in it
    $array1 = ["kiwi"];


    # DATETIME VARIABLES
    $date = "2023-04-11 12:00:00";


    # STRING FUNCTIONS

    # returns the length of the string
    echo strlen($string);

    echo "<br>";

    # reurns the index value of the given letter
    echo strpos($string, "o");

    echo "<br>";

    # in this case it looks for the first instance where the string "Wo" is written and returns it's index value
    echo strpos($string, "Wo");

    echo "<br>";

    # replaces the string in this case "World", with the given string
    echo str_replace("World", "Tobias", $string);

    echo "<br>";

    #Forces all characters into lowercase
    echo strtolower($string);

    echo "<br>";

    # Forces all characters into uppercase
    echo strtoupper($string);

    echo "<br>";

    # Uses the index of each character to cut out a substring
    echo substr($string, 0, 5);

    echo "<br>";

    # In this case the -2 will tell the computer to stop at the second to last index, in this case 10
    echo substr($string, 2, -2);

    echo "<br>";

    # "Explodes" a string into arrays based on property given in the function, in this case " ", meaning it'll explode at the spaces of the string. And print_r can display an arry as a string
    print_r(explode(" ", $string));

    echo "<br>";

    # in this case the array is longer because string1 has more spaces
    print_r(explode(" ", $string1));

    echo "<br>";


    # NUMERICAL FUNCTIONS

    # returns the absolute value even if negative
    echo abs($number);

    echo "<br>";

    # rounds a float to nearest int
    echo round($number);

    echo "<br>";

    # returns the exponential of the given number, in this case 2^3
    echo pow(2, 3);

    echo "<br>";

    # returns the square root of the given number
    echo sqrt(2);

    echo "<br>";

    # returns a random int between the two numbers given
    echo rand(1, 100);

    echo "<br>";

    
    # ARRAY FUNCTIONS

    # returns an int that corresponds with the amount of data in the array
    echo count($array);

    echo "<br>";

    # returns a boolean to show if the given variable is an array or not, 0 = false, 1 = true
    echo is_array($array);

    echo "<br>";

    # pushes a new piece of data to the end of the array
    array_push($array, "kiwi");
    print_r($array);

    echo "<br>";

    # 'pops' the last piece of data off the aray
    array_pop($array);
    print_r($array);

    echo "<br>";

    # reverses so that the last piece of data is moved to index 0, and the originally first piece of data to the back of the array
    print_r(array_reverse($array));

    echo "<br>";

    # moves the content of array1 to the back of array
    print_r(array_merge($array, $array1));

    echo "<br>";


    # DATETIME FUNCTIONS

    # returns the date in the specified order
    echo date("Y-m-d H:i:s");

    echo "<br>";

    # returns the amount of seconds since january 1st 1970 00:00:00 GMT
    echo time();
    
    echo "<br>";
    
    # returns the amount of seconds between the date given and january 1st 1970
    echo strtotime($date);

    ?>
</body>
</html>