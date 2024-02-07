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
    # This is a constant that cannot be changed later, it is customary to name all constants with capitalized letters to show other devs that it's a const
    # Const should be defined at the top of the code
    define("PI", 3.14);
    echo PI;
    ?>
</body>
</html>