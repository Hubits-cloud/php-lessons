<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"content="width=device-width, initial-scale=1.5">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login system</title>
</head>

<body>

    <div class="login-page">

        <h1>
            <?php
            outputUsername(); 
            ?>
        </h1>


        <?php 
        # if the user isn't logged in, show the login form
        if (!isset($_SESSION["user_id"])) { ?>
        <h1>Login</h1>

        <form action="includes/login.inc.php" method="post">
            <div class="txt-field">
                <input type="text" name="username" required>
                <span></span>
                <label>Username</label>
            </div>

            <div class="txt-field">
                <input type="password" name="pwd" required>
                <span></span>
                <label>Password</label>
            </div>

            <input type="submit" value="Login">
            <div class="admin-link">
                <a href="signup.php">Don't have an account?</a>
            </div>
        </form>
        <?php } ?>
        

        
        <?php
        # checks for login errors and prints them, if there are any
        checkLoginErrors();
        ?>

        <h1>Logout</h1>
        <form action="includes/logout.inc.php" method="post">
            <input type="submit" value="Logout">
            <div class="admin-link">
                <a href="signup.php">Don't have an account?</a>
            </div>
        </form>
    </div>

    

</body>
</html>