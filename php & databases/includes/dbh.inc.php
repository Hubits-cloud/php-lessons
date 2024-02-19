<?php 
# makes a var with host name and db name
$dsn = "mysql:host=localhost;dbname=myfirstdatabase";

# Makes a var with db username
$dbusername = "root";

# Makes a var with db password
$dbpassword = "";

try {
    # makes a var containing the PDO class that takes the above globals as arguments
    $pdo = new PDO($dsn, $dbusername, $dbpassword);

    # pdo attribute is set to look for errors, and if there is an error, catch it
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    # catches the error message and assigns it to $e
} catch (PDOException $e) {

    # prints the error
    echo"Connection failed: ". $e->getMessage();
}