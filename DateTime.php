<?php

$dateTime = new DateTime();
$dateTime->setDate(1998, 4, 27);
$dateTime->setTime(10, 5, 30);

$dateTime->add(new DateInterval("P24Y"));

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);

var_dump($dateTime);

$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("Asia/Tokyo"));
var_dump($now);

$nowString = $now->format('Y-m-d H:i:s') . PHP_EOL;
echo "Waktu sekarang adalah $nowString";

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2022-02-13 13:04:20", new DateTimeZone("Asia/Jakarta"));
var_dump($date);
