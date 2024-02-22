<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-control" content="no-cache">
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="login-page">
        <form class="searchform" action="search.php" method="post">
        
            <label for="search">Search for user:</label>
            <input id="search" type="text" name="usersearch" placeholder="Search...">
            <input type="submit" value="Search">

        </form>
    </div>
</body>
</html>