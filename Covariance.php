<?php

require_once "data/Animal.php";
require_once "data/AnimalShelter.php";
require_once "data/Food.php";

$catShelter = new Data\CatShelter();
$cat = $catShelter->adopt("Kucing namanya");
$cat->eat(new Data\AnimalFood());

$dogShelter = new Data\DogShelter();
$dog = $dogShelter->adopt("Anjing namanya");
$dog->eat(new Data\Food());
