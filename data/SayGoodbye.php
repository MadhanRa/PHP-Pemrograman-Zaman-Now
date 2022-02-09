<?php

namespace Data\Traits;

trait SayGoodbye
{
    function goodbye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good bye" . PHP_EOL;
        } else {
            echo "Goodbye $name" . PHP_EOL;
        }
    }
}
trait SayHello
{
    function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

class Person
{
    use SayGoodbye, SayHello, HasName;
}
