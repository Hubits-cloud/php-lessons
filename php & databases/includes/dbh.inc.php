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

    #
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo"Connection failed: ". $e->getMessage();
}