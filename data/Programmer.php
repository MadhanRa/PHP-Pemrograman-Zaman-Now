<?php

class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackEndProgrammer extends Programmer
{
}

class FrontEndProgrammer extends Programmer
{
}

class Company
{
    public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer)
{
    echo "Hello programmer $programmer->name" . PHP_EOL;
}
