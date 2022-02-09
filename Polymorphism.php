<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Eko");
var_dump($company);

$company->programmer = new BackEndProgrammer("Asep");
var_dump($company);
$company->programmer = new FrontEndProgrammer("Budi");
var_dump($company);

sayHelloProgrammer(new Programmer("Eko"));
sayHelloProgrammer(new BackEndProgrammer("Budi"));
sayHelloProgrammer(new FrontEndProgrammer("Asep"));
