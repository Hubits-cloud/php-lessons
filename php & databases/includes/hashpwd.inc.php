<?php 

$pwdSignup = "Belling";

# the higher the number the longer it will take, between 10 and 12 is recommended
$options = [
    'cost' => 12
];

# password_hash will hash the password with the given incryption. In this cas bcrypt. NOTE that password_default gets updated by the php devs.
$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

$pwdLogin = "Belling";

# returns a boolean, if they match true, if not false.
if (password_verify($pwdLogin, $hashedPwd)) {
    echo"The passwords match!";
} else {
    echo "The passwords don't match";
}