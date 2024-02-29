<?php 

declare (strinct_types=1);

function isUsernameWrong(bool | array $result) {
    if (!$result) {

        # if the result is false, the function will return true, meaning there is an error
        return true;
    } else {

        return false;
    }
}

function isPwdWrong(string $pwd, string $hashedPwd) {
    if (!password_verify($pwd, $hashedPwd)) {

        # if the password verifiy is false, the function will return true, meaning there is an error
        return true;
    } else {
        return false;
    }
}

function isInputEmpty(string $username, string $pwd){
    if(empty($username) || empty($pwd)) {

        # if either the username or password field is empty, it'll return true meaning there is an error
        return true;
    } else {
        return false;
    }
}