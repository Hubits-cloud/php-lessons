<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
    $fruits = [
        "Apple",
        "Banana",
        "Cherry"
    ];
    
    echo $fruits[1];

    $fruits[] = "Orange";

    echo $fruits[3];

    array_splice($fruits, 0, 1);

    echo $fruits[1];

    $tasks = [
        "Laundry" => "Daniel",
        "Trash" => "Frida",
        "Vacuum" => "Basse",
        "Dishes" => "Bella"
    ];

    echo $tasks['Laundry'];

    echo count($tasks) .'';

    ?>
</body>
</html>