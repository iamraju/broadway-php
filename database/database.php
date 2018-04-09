<?php
// Connect to the database server and selecting database

// Using MySQLi class (OOP way)
$connection = new MySQLi('localhost', 'broadway', 'broadway', 'colleges');
if(!$connection) {
	echo "There was problem connecting to the database server.";
	die;
}

echo "Connected to the database.";

// Perform database operations.