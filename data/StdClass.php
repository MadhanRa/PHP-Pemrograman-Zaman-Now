<?php

$array = [
    "firstName" => "John",
    "middleName" => "Wang",
    "lastName" => "Budi"
];

$object = (object) $array;

echo "First Name: " . $object->firstName . PHP_EOL;
echo "Middle Name: " . $object->middleName . PHP_EOL;
echo "Last Name: " . $object->lastName . PHP_EOL;
