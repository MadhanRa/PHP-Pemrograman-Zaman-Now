<?php

require_once "data/LoginRequest.php";
require_once "Exception/ValidationException.php";
require_once "Helper/Validation.php";

$login = new LoginRequest();
$login->username = " ";
$login->password = " ";


try {
    validateLoginRequest($login);
    echo "Valid" . PHP_EOL;
} catch (ValidationException | Exception $e) {
    echo "Error : {$e->getMessage()}" . PHP_EOL;

    var_dump($e->getTrace());

    echo $e->getTraceAsString() . PHP_EOL;
} finally {
    echo "Madhang ra madhang tetap Jozz" . PHP_EOL;
}
