<?php
require_once "data/Manager.php";

$manager = new Manager();
$manager->name = 'Asep';
$manager->sayHello("Joko");

$vp = new VicePresident();
$vp->name = 'Joko';
$vp->sayHello("Asep");
