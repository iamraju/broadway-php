<?php
/**
* Checks whether the user is logged in or not,
* Redirects to the login page if not,
*/
function checkLogin() {
	if(!isset($_SESSION['is_logged_in'])) {
		$_SESSION['error'] = "Please login first.";
		header("Location: login.php");
		die;
	}
}

/**
* Redirect to index.php (Dashboard) if the user is already logged in
*/
function redirectLoggedInUser() {
	if(isset($_SESSION['is_logged_in'])) {
		header("Location: index.php");
		die;
	}
}