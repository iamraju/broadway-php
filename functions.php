<?php
// functions : block of codes/statemenets
// syntax
/*
function <function_name> {

}
*/

// returning values from function
$n = 9;
echo "Squar of $n is " . square($n);

function square($n) {
	$result = $n * $n;
	return $result;
}
die;

$n1 = 2;
$n2 = 5;

$text = "Sum ";

_add();

function _add() {
	//$GLOBALS['text'];
	// passing as argument
	// using global keyword

	global $text, $n1, $n2;

	echo $text . ($n1 + $n2);
}

die;
// Example
function printHello() {
	echo "Hello!";
}

printHello();

