<?php

// String concatenation
// . (dot) or , (comma) is used to concat two or more strings in php

$firstName = "Ram";
$lastName = "Sharma";

echo $firstName . $lastName . "<br>"; // prints RamSharma
echo $firstName . ' ' . $lastName . "<br>"; // prints Ram Sharma

// Or use inside double quotes, in which variables are interpolated
echo "$firstName $lastName<br>"; // prints Ram Sharma
die;

// increment ++ & decrement -- operators

$counter = 1;

echo $counter++; //1
echo "<br>";
echo ++$counter; //3

die;

// Assignment operators
// = 
$variable = 'some value';

// += -+ *= /= %= 
$number1 = 100;
$result = 5;

// addition and assignment
$result += $number1;

echo $result;