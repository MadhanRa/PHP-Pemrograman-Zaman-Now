<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Budi";
$student1->value = 100;
$student1->setSample("xxx");

var_dump($student1);

$student2 = clone $student1;

var_dump($student2);

// $student1 => clone $student2 => $student2 -> __clone()
