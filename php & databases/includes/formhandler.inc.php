<?php 

# Checks whether or not the server has recieved a post method.
if ($_SERVER["REQEST_METHOD"] == "POST") {
    
    # looks for an object named username and assigns it's value to $username
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";

        # NAMED QUERY

        $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$username, $pwd, $email]);

        $pdo = null;

        $stmt = null;
        header("Location: ../index.php");
        die();


        # UNNAMED QUERY
        # makes a var name query containing sql code as a string, since we're using unnamed query, the values are "?"
        /*$query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";

        # makes a var named stmt, that contains query that has been prepared for sql execution
        $stmt = $pdo->prepare($query);

        # executes stmt with the username, password and email instead of "?".
        # WARNING. When using unnamed querys, you have to input the data below in the intended order.
        $stmt->execute([$username, $pwd, $email]);

        # makes pdo null in order to save resources
        $pdo = null;

        # makes stmt null in order to save resources
        $stmt = null;

        # returns user to the index
        header("Location: ../index.php");

        # does the same as exit. It's advised to use die instead of exit when exiting a section that connects to other things via db or server.
        die();*/

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