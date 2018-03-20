<!DOCTYPE html>
<html>
<head>
	<title>Form Handling in PHP</title>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h1>Student Login</h1>
		<div style="color: red;">
			<?php 
			if(isset($_GET['error'])) {
				echo $_GET['error'];
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
				<div class="col-md-12 text-center">
					<button class="btn btn-primary">Login</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>