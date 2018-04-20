<?php
include "database.php";
include "library.php";

checkLogin();

?>
<!DOCTYPE html>
<html>
<head>
	<title>My Account - Dashboard</title>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h1>Welcome to Student Dashboard !</h1>

		<div class="row">
			You are logged in as <strong><?php echo $_SESSION['user']['username']; ?></strong>. <a href="logout.php">Logout</a>
		</div>
	</div>
</body>
</html>