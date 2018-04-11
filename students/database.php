<?php
session_start();

ini_set('display_errors', 1);

$mysqli = new MySQLi('localhost', 'broadway', 'broadway', 'broadway_php');
if($mysqli->connect_error) {
	echo "There was problem connecting to the database server.The error is:<br>";
	echo $mysqli->connect_error;
	die;
}
