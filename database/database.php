<?php
// Connect to the database server and selecting database

// Using MySQLi class (OOP way)
$mysqli = new MySQLi('localhost', 'broadway', 'broadway', 'broadway_php');
if($mysqli->connect_error) {
	echo "There was problem connecting to the database server.The error is:<br>";
	echo $mysqli->connect_error;
	die;
}

echo "Connected to the database.";

echo '<hr>';

// SELECT * FROM students;
// showing the tables in the database
$result = $mysqli->query("SELECT * FROM students");

echo "There are $result->num_rows students.";

echo '<hr>';
// check if the query has some records
if($result->num_rows > 0) {
	// getting first record from the result set
	/*$row = $result->fetch_assoc(); //0th
	echo "Name: " . $row['name'];*/

	// print all the records that were given by the query SELECT * FROM students
	while($row = $result->fetch_assoc()) {
		echo $row['name'] . ' | ' . $row['email'] . "<br>";
	}
}

// Perform database operations.
