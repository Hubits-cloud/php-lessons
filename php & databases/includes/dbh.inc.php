<?php 
include_once "config.php";
# makes a var with host name and db name
$dsn = "mysql:host=localhost;dbname=myfirstdatabase";

# Makes a var with db username
$dbusername = "root";

# Makes a var with db password
$dbpassword = "";

try {
    # makes the pdo connection an object to allow us to refer to it easily.
    $pdo = new PDO($dsn, $dbusername, $dbpassword);

    # Allows us to set/change attributes of the object. In this case attr-errmode and errmode_exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    # catches the error message and assigns it to $e
} catch (PDOException $e) {

    # prints the error
    echo"Connection failed: ". $e->getMessage();
}
