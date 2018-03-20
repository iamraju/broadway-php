<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username === 'ram' && $password === 'sharma') {
	header("Location: success.php");
	die;
}
else {
	header("Location: login.php?error=Login failed, please enter correct credentials!");
	die;
}