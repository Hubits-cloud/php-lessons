<?php 

# completely destroys the session data
session_start();
session_unset();
session_destroy();

# returns the user to the index
header("Location: ../index.php");

# kills the script
die();