<?php

// Type cast in PHP
// Converting types of values/variables
// string, int, float, object, array, boolean

$number = '120sfasdfa4345';
echo (int) $number;
die;
var_dump($number);

var_dump((int) $number);
die;
// comparision operators
// >, >=, <, <=, ==, !=, ===, !==, <>
// equals to, not equals to
// == === != !==

$number = 18;
$remainder = $number % 2;
$toCheckValue = (int) '0';
var_dump($toCheckValue);die;
if($remainder != $toCheckValue) {
	echo "Odd";
}
else {
	echo "Even";
}
die;
// ternary operator
// expression ? true value : false value;
$age = 9;

$result = '';

$result = $age > 18 ? "Eligible" : "Not eligible";
echo $result;
die;

$status = 'Old';


// if conditions

// nested if statements/conditions
if($age < 1) {
	echo "Age is not valid!";
	die;
}

if($age <= 11) {
	$status = 'Child';
}
else if($age <= 19) {
	$status = 'Teenage';
}
else if($age <= 40) {
	$status = 'Adult';
}

echo "<b><i>Age Status is : $status</i></b>";
die;
//Syntax

if($age > 18) {
	echo "Eligible";
}
else {
	echo "Not eligible";
}

die;