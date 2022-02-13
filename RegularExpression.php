<?php
$matches = [];
$result = preg_match_all("/manusia|jomblo|sejati/i", "Manusia Sejati itu Jomblo", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/fuck|bitch/i", "***", "hey you mother fucker, fuck you bitches!");
var_dump($result);

$result = preg_split("/[\s,-]/", "Eko Kurniawan Khannedy, Programmer, Zaman-Now");
var_dump($result);
