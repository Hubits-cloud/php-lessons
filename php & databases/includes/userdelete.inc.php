<?php 

# Checks whether or not the server has recieved a post method.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    # looks for an object named username and assigns it's value to $username
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once "dbh.inc.php";

        /* NOTE that in an actual website you'd use the user id to delete the user */
        $query = "DELETE FROM users WHERE username = :username AND pwd = :pwd;";

        $stmt = $pdo->prepare($query);

        # binds the var to it's given position in the query
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);

        $stmt->execute();

        $pdo = null;

        $stmt = null;

        header("Location: ../index.php");
        
        die();

        # cathces the error. Look at dbh.inc.php for specifics
    } catch (PDOException $e) {

        # sends the user an error.
        die("Query failed: " . $e->getMessage());
    }
}
else {
    # returns user to index.php if they didn't get here through post
    header("Location: ../index.php");
}