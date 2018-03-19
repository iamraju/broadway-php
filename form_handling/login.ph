<!DOCTYPE html>
<html>
<head>
	<title>Form Handling in PHP</title>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h1>Student Registration</h1>
		<form action="submit.php" method="post">
			
			<div class="row">
				<div class="col-md-4">
					<label>First Name:</label>
				</div>
				<div class="col-md-8">
					<input required type="text" name="first_name">
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<label>Last Name:</label>
				</div>
				<div class="col-md-8">
					<input required type="text" name="last_name">
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 text-center">
					<button class="btn btn-primary">Register</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>