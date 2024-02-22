<?php
declare(strict_types=1);
include_once "config.php";
session_start();

# $_session creates a var with the name, in this came username, working as the identifier
# echo $_SESSION["username"] would print root
$_SESSION["username"] = "root";

# frees the specified session variable
unset($_SESSION["username"]);

# frees all the session vairables
session_unset();

# destroys all session data, but not the cookie id.
session_destroy();
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

        <form action="includes/formhandler.inc.php" method="post">

            <div class="admin-link">
                Dommer login <a href="login.php">Klik her</a>
            </div>

            <div class="admin-link">
                Delete account <a href="delete.php">Klik her</a>
            </div>

            <div class="admin-link">
                Change account <a href="change.php">Klik her</a>
            </div>
            
            <div class="admin-link">
                Search <a href="searcher.php">Klik her</a>
            </div>

            <div class="admin-link">
                Session security <a href="session.php">Klik her</a>
            </div>

        </form>
    </div>
</body>
</html>