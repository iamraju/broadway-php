<?php
// Connect to the database server and selecting database

$pdo = new \PDO('mysql:host=localhost;dbname=broadway_php', 'broadway', 'broadway');

echo "Connected to the database.";

echo '<hr>';

// SELECT * FROM students;
// showing the tables in the database
$email = $_GET['email'];

// $email = 'hari@gmail.com' OR 1 OR '';
$sql = "SELECT * FROM students WHERE email='$email'";
echo $sql;
$result = $pdo->query($sql);

foreach($result as $student) {
	print_r($student);
	echo '<hr>';
}
// Perform database operations.
