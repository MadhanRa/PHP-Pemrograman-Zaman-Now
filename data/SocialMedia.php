<?php

class SocialMedia
{
    private string $name;
}

// Bila class ini diberi final, maka class FakeFacebook akan error
class Facebook extends SocialMedia
{
    // Bila function ini diberi final, maka function yg di override di class FakeFacebook akan error
    public function login(string $username, string $password): bool
    {
        return true;
    }
}

class FakeFacebook extends Facebook
{
    public function login(string $username, string $password): bool
    {
        return true;
    }
}
