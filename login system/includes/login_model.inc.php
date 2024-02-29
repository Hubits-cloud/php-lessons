<?php 

declare (strinct_types=1);

# this function grabs the users info from the db, when they're logging in
function getUser(object $pdo, string $username) {
    $query = "SELECT * FROM users WHERE username = :username;";

    # by sending in the query seperate from the data, we will seperate the data from the user query, and therfore prevent sql injections
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    # grabs the first result and refers to it by the column
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}