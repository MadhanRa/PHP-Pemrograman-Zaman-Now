<?php

require_once "Helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = 'Junior ea';

echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10, 20, 30, 40);
echo "Result: $result";
