<?php
require_once "data/Product.php";

$product = new Product("Apel", 20000);

echo "Product: {$product->getName()}, price: {$product->getPrice()}" . PHP_EOL;

$jeruk = new ProductDummy("Jeruk", 6000);
$jeruk->info();
