<?php
require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Angga";
$manager->sayHello("Joko");

$vp = new VicePresident();
$vp->name = "Eko";
$vp->sayHello("Budi");
