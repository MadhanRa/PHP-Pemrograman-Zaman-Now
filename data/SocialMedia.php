<?php

class SocialMedia
{
    private string $name;
}

// Bila class ini diberi final, maka class FakeFacebook akan error
class Facebook extends SocialMedia
{
}

class FakeFacebook extends Facebook
{
}
