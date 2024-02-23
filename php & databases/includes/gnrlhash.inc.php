<?php 

# the sensitve data that we want to hash
$sensitiveData = "Belling";

# makes a var called salt that is 16 random bytes of hex
$salt = bin2hex(random_bytes(16));

# makes a var called pepper that is our secret hash string
$pepper = "ASecretPepperString";


# combines the sensitive data with our salt and pepper
$dataToHash = $sensitiveData . $salt . $pepper;

# hashes it all with the sha256 algorithm
$hash = hash("sha256", $dataToHash);


# after this you would store the hash and salt, and store them inside a database or a file storage system

/*----*/

# checking if submitted data mathces the above data


# the new piece of data given by the user
$sensitiveData = "Belling";

# our "stored salt"
$storedSalt = $salt;

# our "stored hash"
$storedHash = $hash;

# recreted pepper
$pepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $storedSalt . $pepper;

$verify = hash("sha256", $dataToHash);

if ($storedHash === $verify) {
    echo "The data are the same!";
} else {
    echo "The data are not the same!";
};