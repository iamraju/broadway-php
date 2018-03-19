<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username === 'ram' && $password === 'sharma') {
	echo 'Login success';
}
else {
	echo 'Invalid login credentials!';
}