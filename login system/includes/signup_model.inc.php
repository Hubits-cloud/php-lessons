<?php 
/* Model contains functions that communicate with the database, and since those functions are very sensitive,
the only thing that may interact with the functions is the controller */

# allows our code to have type declerations
declare(strict_types=1);

function getUsername (object $pdo, string $username) {
    $query = "SELECT username FROM users WHERE username = :username;";

    # by sending in the query seperate from the data, we will seperate the data from the user query, and therfore prevent sql injections
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    # grabs the first result and refers to it by the column
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getEmail (object $pdo, string $email) {
    $query = "SELECT email FROM users WHERE email = :email;";

    # by sending in the query seperate from the data, we will seperate the data from the user query, and therfore prevent sql injections
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    # grabs the first result and refers to it by the column
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

# inserts the user in the db
function setUser (object $pdo, string $username, string $pwd, string $email) {
    $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";
    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];

    # hashes the given password with the brypt method.
    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pwd", $hashedPwd);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
}