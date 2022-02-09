<?php 
require_once "data/Location.php";

use Data\{Location, City, Province, Country};

$city = new City();
$province = new Province();
$country = new Country();

$city->name = "Bandung";
echo "Kotaku terletak di $city->name".PHP_EOL;
