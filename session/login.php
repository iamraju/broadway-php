<?php
session_start();

if(isset($_COOKIE['remember_me'])) {
	header("Location: myaccount.php");
	die;
}
echo session_id();
$lastVisitTime = null;
if(isset($_COOKIE['last_visit'])) {
	$lastVisitTime = $_COOKIE['last_visit'];
}
setcookie("last_visit", time());
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Session</title>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h1>Student Login</h1>
		<div>
			<?php
			if(!empty($lastVisitTime)) {
				echo "You last visited this page at " . date('Y-m-d H:i:s', $lastVisitTime);
			}
			?>
		</div>
		<div style="color: red;">
			<?php 
			if(isset($_SESSION['error'])) {
				echo $_SESSION['error'];
				unset($_SESSION['error']);
			}
			?>
		</div>
		<form action="checklogin.php" method="post">
			
			<div class="row">
				<div class="col-md-3">
					<label>Username:</label>
				</div>
				<div class="col-md-9">
					<input required type="text" name="username">
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<label>Password:</label>
				</div>
				<div class="col-md-9">
					<input required type="password" name="password">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label>&nbsp;</label>
				</div>
				<div class="col-md-9">
					<input value="1" type="checkbox" name="remember_me"> Remember Me
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 text-center">
					<button class="btn btn-primary">Login</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>