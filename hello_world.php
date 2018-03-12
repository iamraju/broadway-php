<?php
// Error levels

error_reporting(E_ALL & ~E_STRICT);

//mysql_connect("localhost", "root", "");

die;
// run time php configurations
// ini_set('display_errors', 0);
echo $name;

die;
/*
This code is for showing examples for
*/
$firstName = "Ram";
$lastName = "Sharma";

echo "$firstName $lastName";

// echo $firstName . " = " . $lastName;
die;
$num1 = 100;
$num2 = 300;

$result = $num1 + $num2;
echo $result . "<br>";
$result = $num1 * $num2;
echo $result;
die;
$name = 'Ram';
$courseName = "The title of the movie was \"Dabangg\" !";
?>
<!DOCTYPE html>
<html>
<head>
	<title>My First Project</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<h1>The sum is: <?php echo $num1 + $num2; ?></h1>
	<h1>The product of <?php echo $num1; ?> and <?php echo $num2; ?> is : <?php echo $num1 * $num2; ?></h1>	
	<h3>Courses</h3>
	<ul>
		<li><?php echo $courseName; ?></li>
		<li>Advanced PHP</li>
		<li>Laravel 5</li>
	</ul>
</body>
</html>