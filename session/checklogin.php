<?php
include "database.php";

// Using $_SESSION superglobal, we can set the variables
$username = $_POST['username'];
$password = md5($_POST['password']);

// query the database with the given username and password
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $mysqli->query($sql);

// check if the user exists and a row is returned from the database
if($result->num_rows > 0) {
	// fetch the user's information from the table
	// an associative array is returned
	$row = $result->fetch_assoc();

	if($row['status'] != 1) {
		$_SESSION['error'] = "Sorry your login has been suspended, please contact administrator!";

		header("Location: login.php");
		die;
	}
	
	// store the user's information in session (variable)
	$_SESSION['user'] = $row;

	$_SESSION['is_logged_in'] = true;

	if(isset($_POST['remember_me'])) {
		setcookie("remember_me", $username, time() + 3600);
	}

	header("Location: index.php");
	die;
}
else {
	$_SESSION['error'] = "Login failed, please enter correct credentials!";

	header("Location: login.php");
	die;
}