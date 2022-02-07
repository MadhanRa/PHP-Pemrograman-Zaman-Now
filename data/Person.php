<?php

class Person
{
    const AUTHOR = "Ramadhan"; // Constant nempel ke class, tidak bisa diakses lewat objek

    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }

    function info()
    {
        echo "Author: " . self::AUTHOR . PHP_EOL;
    }
}
