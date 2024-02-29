<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"content="width=device-width, initial-scale=1.5">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Signup</title>
</head>

<body>

    <div class="login-page">
        <h1>Signup</h1>

        <form action="includes/signup.inc.php" method="post">
            <?php
            signupInput(); 
            ?>
            <input type="submit" value="Signup">
            <div class="admin-link">
                <a href="index.php">Already have an account?</a>
            </div>
        </form>
        <?php
        # checks for signup errors and prints them, if there are any
        checkSignupErrors();
        ?>
    </div>

</body>
</html>