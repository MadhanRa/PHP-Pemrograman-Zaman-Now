<?php

require_once "data/SayGoodbye.php";

use Data\Traits\{Person, SayGoodbye, SayHello};

$person = new Person();
$person->goodbye("Siti");
$person->hello("Tuti");

$person->name = "Bambank";
var_dump($person);

$person->run();
