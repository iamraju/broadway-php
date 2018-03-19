<?php
$country = $_POST['country'];
var_dump($country);
die;

$name = 'asf';
if(empty($name)) {
	echo "Variable is empty.";
}
else {
	echo "Not empty";
}
die;

foreach($_POST as $key => $value) {
	if(is_array($value)) {
		echo $key . ": " . implode(",", $value) . "<br>";
		/*echo "$key : ";
		foreach($value as $v) {
			echo "$v,";
		}
		echo "<br>";*/
	}
	else {
		echo "$key = $value<br>";
	}
}
die;

echo "Name: " . $_POST['first_name'] . ' ' . $_POST['last_name'] . '<br>';
echo "Gender: " . $_POST['gender'] . '<br>';
echo "Country: " . $_POST['country'] . '<br>';

echo "Skills: <br>";
foreach($_POST['skills'] as $skill) {
	echo "$skill, ";
}

die;
echo "<pre>";
print_r($_POST);
die;

echo $_GET['get_value'];
die;
echo $_POST['last_name'];
die;

echo "GET Data<pre>";
print_r($_GET);
echo "</pre>";

echo "POST Data<pre>";
// $_POST PHP superglobal array is an associative array
// which contains the HTML form's element data
// Form's element's name is used as array keys
print_r($_POST);
echo "</pre>";
die; 