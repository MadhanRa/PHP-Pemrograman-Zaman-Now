<?php

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Okayu";
$cat->run();

$dog = new Dog();
$dog->name = "Korone";
$dog->run();