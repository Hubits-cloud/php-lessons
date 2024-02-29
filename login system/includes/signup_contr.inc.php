<?php 

declare(strict_types=1);

# checks if the input is valid
function isInputEmpty(string $username, string $pwd, string $email) {
    if (empty($username) || empty($pwd) || empty($email)) {
        return true;
    } else {
        return false;
    }
}

# checks if the email is valid
function isEmailInvalid(string $email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        # if filter var returns false, the function will return true to show that theres an error
        return true;
    } else {
        return false;
    }
}

# checks if the username is taken
function isUsernameTaken(object $pdo, string $username) {
    if (getUsername ($pdo, $username)) {
        # if getUsername returns true, the function will return true to signify that the username is already taken
        return true;
    } else {
        return false;
    }
}


# checks if the email is registered
function isEmailRegistered(object $pdo, string $email) {
    if (getEmail ($pdo, $email)) {

         # if getEmail returns true, the function will return true to signify that the email is already registered
        return true;
    } else {
        return false;
    }
}

# creates a user through setUser. See more at signup_model
function createUser(object $pdo, string $username, string $pwd, string $email) {
    setUser( $pdo, $username, $pwd, $email);
}