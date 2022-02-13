<?php

class Zero
{
    private array $properties = [];

    public function __get($name)
    {
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __isset($name): bool
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    public function __call($name, $args)
    {
        $join = join(", ", $args);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $args)
    {
        $join = join(", ", $args);
        echo "Call static function $name with arguments $join" . PHP_EOL;
    }
}

$zero = new Zero();
$zero->firstName = "Budi";
$zero->middleName = "Pambudi";
$zero->lastName = "Yunita";

echo "First Name: " . $zero->firstName . PHP_EOL;
echo "Middle Name: " . $zero->middleName . PHP_EOL;
echo "Last Name: " . $zero->lastName . PHP_EOL;

$zero->sayHello("Hello", "Sentosa");
Zero::sayHello("Budi", "Rangga");
