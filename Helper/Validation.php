<?php

function ValidateLoginRequest(LoginRequest $request)
{
    if (!isset($request->username)) {
        throw new ValidationException("Username is Null");
    } elseif (!isset($request->password)) {
        throw new ValidationException("Password is Null");
    } elseif (trim($request->username) == "") {
        throw new ValidationException("Username is empty");
    } elseif (trim($request->password) == "") {
        throw new ValidationException("Password is empty");
    }
}
