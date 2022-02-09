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

trait CanRun
{
    public abstract function run(): void;
}

class ParentPerson
{
    public function goodbye(?string $name): void
    {
        echo "Goodbye in Person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in Person" . PHP_EOL;
    }
}

class Person extends ParentPerson
{
    use SayGoodbye, SayHello, HasName, CanRun {
        //bisa di override
        //hello as private;
        //goodbye as private;
    }

    public function run(): void
    {
        echo "$this->name is running" . PHP_EOL;
    }
}
