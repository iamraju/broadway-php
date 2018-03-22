<?php
// start the session
session_start();

// Using $_SESSION superglobal, we can set the variables
$username = $_POST['username'];
$password = $_POST['password'];

if($username === 'ram' && $password === 'sharma') {
	$_SESSION['username'] = $username;
	
	header("Location: myaccount.php");
	die;
}
else {
	$_SESSION['error'] = "Login failed, please enter correct credentials!";

	header("Location: login.php");
	die;
}