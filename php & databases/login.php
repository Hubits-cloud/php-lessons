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
        <h1>Dommer</h1>
        <form action="includes/formhandler.inc.php" method="post">
            <div class="txt-field">
                <input type="text" name="username" required>
                <span></span>
                <label>Brugernavn</label>
            </div>
            <div class="txt-field">
                <input type="password" name="pwd" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="txt-field">
                <input type="text" name="email" required>
                <span></span>
                <label>Email</label>
            </div>
            <input type="submit" value="Login">
            <div class="admin-link">
                Change account <a href="change.php">Klik her</a>
            </div>
            <div class="admin-link">
                Delete account <a href="delete.php">Klik her</a>
            </div>
        </form>
    </div>
</body>
</html>