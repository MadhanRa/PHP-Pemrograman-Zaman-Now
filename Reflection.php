<?php

require_once "Exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "Helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "Budi";
$request->password = "Budi";

// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest
{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "Sulman";
$register->address = "Jakarta";
$register->email = "suleman@mail.com";

ValidationUtil::validateReflection($register);
