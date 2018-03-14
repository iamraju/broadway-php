<?php
echo "<pre>";
$destinations = [
	'Philipines',
	'India',
	'Indonesia',
	'Malaysia',
	'Nepal',
	'Bhutan',
	'Maldivs',
	'Pakistan',
	'USA'
];
$destinations1 = [
	'Canada',
	'UK',
	'France'
];
$arr1 = ['k1' => 'key1', 'k2' => 'key2'];
$arr2 = ['val1', 'val2'];
print_r(array_combine($arr1, $arr2));

die;
$menus = [
	'something',
	
	'submenus' => [
		[
			'name' => 'Destination',
			'link' => './destination.php',
		],
		[
			'name' => 'Destination',
			'link' => './destination.php',
		],
		[
			'name' => 'Destination',
			'link' => './destination.php',
		]
	],
	[
		'name' => 'Pricing',
		'link' => './pricing.php'
	],
	[
		'name' => 'Contact',
		'link' => './contact.php'
	]
];
print_r($menus);die;
foreach($menus as $menu) {
	if(is_array($menu)) {
		foreach($menu as $submenu) {
			echo $submenu['name'];
		}
		echo "<br>";
	}
	else {
		echo "$menu<br>";
	}
	
}
// print_r($menus);
die;
// Associative arrays
$student = [
	'name' 		=> "Ram Sharma",
	'age' 		=> 30,
	'college' 	=> 'Swastik',
	'fatherName' => 'Hari Sharma',
];
echo $student['name'];
// replacing/modifying array element values
var_dump($student);
$student['college'] = "Ascol"; // if "college" key index found, it modifies the value, adds new element otherwise
var_dump($student);
die;
// accessing associative array elements
echo $student['age'];
die;
var_dump($student);

echo '<hr>';

$name = "Shyam";
if(isset($name)) {
	echo $name;
}
else {
	echo 'No $name variable exists';
}
die;
// Enrolled students list
$students = [
	'Ram',
	'Shyam',
	'Gopal',
];

$findStudent = 'Shyam'; // integer
if(in_array($findStudent, $students)) {
	echo "$findStudent is enrolled!";
}
else {
	echo "$findStudent is not enrolled !";
}
echo '<hr>';

$fruits = [
	'Apple',
	'Pineapple',
	'Mango',
	'Orange',
	10002,
	3000,
	20,
	95.99
];

// check if an element exists in an array
if(isset($fruits[11])) {
	echo $fruits[11];
}

die;


var_dump($fruits);
// removing particular indexed element
unset($fruits[4]);
var_dump($fruits);
die;
// adding new element
$fruits[] = 'Something';
// Accessing array elements randomly
echo $fruits[2]; // Mango

echo "<hr>";

echo "Total Elements : ". count($fruits);


var_dump($fruits);


$fruits[] = 'Something';

var_dump($fruits);
echo "</pre>";
die;