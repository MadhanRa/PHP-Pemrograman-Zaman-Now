<?php
require_once "data/Person.php";

$eko = new Person("Eko", "Subang");
$eko->sayHello("Budi");

$joko = new Person("Joko", "Cirebon");
$joko->sayHello(null);

$eko->info();
