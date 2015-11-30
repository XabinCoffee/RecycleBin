<?php

$password = "web000";


// Enkripzioaren kostua
$cost = 10;

// salt random bat generatu
$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');

// Prefix information about the hash so PHP knows how to verify it later.
// "$2a$" Means we're using the Blowfish algorithm. The following two digits are the cost parameter.
$salt = sprintf("$2a$%02d$", $cost) . $salt;

// $salt-en balioa:
// $2a$10$eImiTXuWVxfM37uY4JANjQ==

// Pasahitza hasheatu sortutako salt-arekin
$hash = crypt($password, $salt);
	
echo $hash;



?>