<?php
// File upload
// is_uploaded_file
// move_uploaded_file
echo "<pre>";
print_r($_FILES);

$isUploaded = is_uploaded_file($_FILES['photo']['tmp_name']);

$photoAllowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
if($isUploaded === true) {
	$filename = $_FILES['photo']['name'];
	$type = $_FILES['photo']['type'];
	if(in_array($type, $photoAllowedTypes)){
		move_uploaded_file($_FILES['photo']['tmp_name'], 'photos/' . $filename);

		echo "File was uploaded";
	}
	else {
		echo "Invalid photo type";
	}
}
else {
	echo "No photo was uploaded!";
}
die;
$isUploaded = is_uploaded_file($_FILES['resume']['tmp_name']);

if($isUploaded === true) {
	$filename = $_FILES['resume']['name'];

	move_uploaded_file($_FILES['resume']['tmp_name'], 'photos/' . $filename);
	
	echo "Resume File was uploaded";
}
else {
	echo "Please upload a file for resume!";
}

die;
echo "<pre>";
print_r($_FILES);
print_r($_POST);

/*echo "GET<br>";
print_r($_GET);
echo "POST<br>";*/
// print_r($_POST);
/*echo "REQUEST<br>";
print_r($_REQUEST);*/
die;
/*$country = $_POST['country'];
var_dump($country);
die;*/

/*$name = 'asf';
if(empty($name)) {
	echo "Variable is empty.";
}
else {
	echo "Not empty";
}
die;*/

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