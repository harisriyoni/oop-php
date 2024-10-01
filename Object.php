<?php
require_once 'data/Person.php';

$person = new Person();
$person->name = "Syafiq";
$person->address = null;
$person->country = "Malaysia";
echo $person->name . PHP_EOL;
echo $person->address . PHP_EOL;
echo $person->country . PHP_EOL;

// var_dump($person); // object(Person)#1 (0) { } 