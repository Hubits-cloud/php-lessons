<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST" ) {

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        # ERROR HANDLERS

        $errors = [];

        # checks if the form has been filled with appropriate data
        if (isInputEmpty($username, $pwd, $email)) {
            $errors["emptyInput"] = "Fill in all fields!";
        };

        # chacks if the email is valid
        if (isEmailInvalid($email)) {
            $errors["invalidEmail"] = "Invalid email used!";
        };

        # checks if username is already in use
        if (isUsernameTaken($pdo, $username)) {
            $errors["takenUsername"] = "Username is already taken!";
        };

        
        if (isEmailRegistered($pdo, $email)) {
            $errors["registeredEmail"] = "Email is already in use!";
        };

        require_once 'config_session.inc.php';
        
        if ($errors) {

            # if there are errors in $errors, they'll be placed within the session var errors_signup
            $_SESSION["errors_signup"] = $errors;

            # places the username and password in signupData. See signup_view for more
            $signupData = [
                "username" => $username,
                "email" => $email
            ];
            $_SESSION["signup_data"] = $signupData;

            # returns the user to signup.php
            header("Location: ../signup.php");

            # kills the script
            die();
        };

        # creates the user in the db. See signup_contr for more.
        createUser($pdo, $username, $pwd, $email);

        # returns the user to the index with the value 'signup=success'
        header("Location: ../index.php?signup=success");

        # sets pdo to null to save resources
        $pdo=null;

        # sets stmt to null to save resources
        $stmt=null;

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
};