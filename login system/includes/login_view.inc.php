<?php 

declare(strict_types=1);

# outputs the username
function outputUsername() {
    if (isset($_SESSION["user_id"])) {

        # checks if the session var user_id is set, and returns it's content
        echo "You are logged in as " . $_SESSION["user_username"];
    } else {

        # if there is no user_id var
        echo "You are not logged in";
    }
}

# checks for errors. See login.inc.php for more
function checkLoginErrors() {
    if (isset($_SESSION["errors_login"])) {
        $errors = $_SESSION["errors_login"];

        echo "<br>";

        foreach ($errors as $error) {
            echo '<p>'. $error .'</p>';
        }

        unset($_SESSION['errors_login']);

    # checks if the browser has recieved a GET where login=success
    } else if (isset($_GET['login']) && $_GET['login'] === "success") {

    }
}