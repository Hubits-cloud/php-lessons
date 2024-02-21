<?php 

# Checks whether or not the server has recieved a post method.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    # looks for an object named username and assigns it's value to $username
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";

        /* NOTE that in an actual website you won't have to manually pick the user id like we did here, 
        you'd simply grab the user id from the database since the user has to be logged in to change their info */
        $query = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE id = 5;";

        $stmt = $pdo->prepare($query);

        # binds the var to it's given position in the query
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);

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