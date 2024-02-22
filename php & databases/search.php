<?php
declare(strict_types=1);

# Checks whether or not the server has recieved a post method.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    # looks for an object named username and assigns it's value to $username
    $userSearch = $_POST["usersearch"];


    try {
        require_once "includes/dbh.inc.php";

        # NAMED PARAMETERS

        $query = "SELECT * FROM comments WHERE username = :usersearch;";

        $stmt = $pdo->prepare($query);

        # binds the var to it's given position in the query
        $stmt->bindParam(":usersearch", $userSearch);


        $stmt->execute();


        # using fetchALL we grab the data from the database, and in fetch_ASSOC we grab it as an assosiative array
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;

        $stmt = null;


        
        # cathces the error. Look at dbh.inc.php for specifics
    } catch (PDOException $e) {

        # sends the user an error.
        die("Query failed: " . $e->getMessage());
    }
}
else {
    # returns user to index.php if they didn't get here through post
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-control" content="no-cache">
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="login-page">
        
        <h1>Search results:</h1>

        <?php
        if (empty($results)) {
            echo "<div class='comment'>";
            echo "<p>There were no results.</p>";
            echo "</div>";
        } else {
            foreach ($results as $row) {
                echo "<div class='comment'>";
                echo "<h4>" . htmlspecialchars($row["username"]) . "</h4>";
                echo "<p>" . htmlspecialchars($row["comment_text"]) . "</p>";
                echo "<p>" . htmlspecialchars($row["created_at"]) . "</p>";
                echo "</div>";
            }
        }
        ?>

    </div>
</body>
</html>