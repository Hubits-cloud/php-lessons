<?php

# $_session creates a var with the name, in this came username, working as the identifier
# echo $_SESSION["username"] would print root
#$_SESSION["username"] = "root";

# frees the specified session variable
#unset($_SESSION["username"]);

# frees all the session vairables
#session_unset();

# destroys all session data, but not the cookie id.
#session_destroy();

# enables a setting in the .ini that reduces the risk of session hijacking by not showing the session id in the browser
ini_set('session.use_only_cookies', 1);

# PHP enforces strict session ID validation. This means that PHP will reject uninitialized session IDs that are supplied by clients, and make the session id harder to guess.
ini_set('session.use_strict_mode', 1);

# allows you to set parameters for the cookies
session_set_cookie_params([

    # sets how long the cookie will exist before being destroyed, in this case 30 min aka 1800 seconds
    'lifetime' => 1800,

    # points to witch domain it's allowed to run in. In this case localhost
    'domain' => 'localhost',

    # this says that it's allowed to run on all pages as long as it's localhost/... 
    'path' => '/',

    # ensures that the cookie only runs on https websites, and not http
    'secure' => true,

    # this restricts any clientside script from being run on the website
    'httponly' => true
]);

session_start();

# checks if the exists a session var called last_regeneration 
if ( !isset ($_SESSION ['last_regeneration'])) {

    # regenerates the session id making it more secure
    session_regenerate_id(true);

    # creates the session var and setes it's value to the current server time
    $_SESSION ['last_regeneration'] = time();
} else {

    # setes the interval between each regenration, in this case 60 sec time 30 is 30 min
    $interval = 60 * 30;

    # minuses time with session and returns a bunch of seconds, and if they are bigger or equal to interval, run the if statement
    if (time() - $_SESSION ['last_regeneration'] >= $interval) {

        # regenerates session id 
        session_regenerate_id(true);

        # setes the session var to the current server time
        $_SESSION ['last_regeneration'] = time();
    }
};
