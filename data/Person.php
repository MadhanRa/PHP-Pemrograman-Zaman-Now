<?php

class Person
{
    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    function sayHello($name)
    {
        echo "Hello $name";
    }
}
