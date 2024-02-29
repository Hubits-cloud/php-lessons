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
    
    # makes an indexed array
    $fruits = [
        "Apple",
        "Banana",
        "Cherry"
    ];
    
    # echoes banana since it is in index 1
    echo $fruits[1];

    # adds orange to the end of the array
    $fruits[] = "Orange";

    # echoes orange
    echo $fruits[3];

    # splices the array from index 0 to on position more (to index 1), and removes all data inbetween, in this case that's only apple.
    array_splice($fruits, 0, 1);

    # echoes cherry since cherry is now in postion 1 with banana at 0
    echo $fruits[1];

    # makes an associative array
    $tasks = [
        "Laundry" => "Daniel",
        "Trash" => "Frida",
        "Vacuum" => "Basse",
        "Dishes" => "Bella"
    ];

    # echoes Daniel, since laundry is the kay to daniel.
    echo $tasks['Laundry'];

    # echoes the amount of data in the array, in this case 4
    echo count($tasks) .'';

    ?>
</body>
</html>