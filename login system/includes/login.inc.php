<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {

        # NOTE THEY HAVE TO BE INCLUDED IN THIS ORDER TO AVOID ERROR
        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';

        $errors = [];

        # checks if the form has been filled with appropriate data
        if (isInputEmpty($username, $pwd,)) {
            $errors["emptyInput"] = "Fill in all fields!";
        }

        # the var results contains the userinfo, see login_model for more
        $results = getUser($pdo, $username);

        # checks if the username is incorrect, see login_contr for more
        if (isUsernameWrong($results)){
            $errors["login_incorrect"] = "Incorrect login info!";
        }

        # checks if the username is correct, and if the password is wrong. See login_contr for more
        if (!isUsernameWrong($results) && isPwdWrong($pwd, $results["pwd"])) {
            $errors["login_incorrect"] = "Incorrect login info!";
        }

        require_once 'config_session.inc.php';
        
        # checks if there's any errors in the errors array
        if ($errors) {

            # binds the errors to the session var errors_login
            $_SESSION["errors_login"] = $errors;

            # returns the user to the index
            header("Location: ../index.php");

            # kills the script
            die();
        }

        # creates a new session id containing the logged in users user id.
        $newSessionId = session_create_id();
        $sessionID = $newSessionId. "_" . $results["id"];
        session_id($sessionID);

        # binds the users id in the db to the session var user_id
        $_SESSION["user_id"] = $results["id"];

        # binds the users name in the db to the session var user_username. The reason we sanitize username but not the id, is because the username may presentet in the browser
        $_SESSION["user_username"] = htmlspecialchars ($results["username"]);

        # reset the regen timer
        $_SESSION["last_regen"] = time();

        # returns the user to the index
        header("Location: ../index.php?login=success");

        # removes the pdo data to save resources
        $pdo = null;

        # removes the stmt data to save resources
        $stmt = null;

        # kills the script
        die();

    # catches the pdoexception aka pdo errors and binds them to 'e'
    } catch (PDOException $e) {

        # prints the failure
        die("Query failed: " . $e->getMessage());
    }
} else {
    # returns the user to the index
    header("Location: ../index.php");

    # kills the script
    die();
}