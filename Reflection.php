<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "Not";
$request->password = "Is Not Null";

// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest
{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "Noir";
$register->address = "NYC";
$register->email = "noirisme@gmail.com";

ValidationUtil::validateReflection($register);

// ValidationUtil::validate($register);
