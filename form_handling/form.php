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
					<input class="form-control" placeholder="Enter your firstname." required type="text" name="first_name">
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<label>Last Name:</label>
				</div>
				<div class="col-md-8">
					<input class="form-control" required type="text" name="last_name">
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<label>Gender:</label>
				</div>
				<div class="col-md-8">
					<input type="radio" value="Male" name="gender"> Male 
					<input type="radio" value="Female" name="gender"> Female 
					<input type="radio" value="Other" name="gender"> Other
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<label>Skills:</label>
				</div>
				<div class="col-md-8">
					<input type="checkbox" value="HTML" name="skills[]"> HTML <br>
					<input type="checkbox" value="CSS" name="skills[]"> CSS <br>
					<input type="checkbox" value="JavaScript" name="skills[]"> JavaScript
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<label>Country:</label>
				</div>
				<div class="col-md-8">
					<select name="country" required class="form-control">
						<option value="" selected="">Select Country</option>
						<option value="1">Nepal</option>
						<option value="2">India</option>
						<option value="3">Bhutan</option>
						<option value="4">Pakistan</option>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 text-center">
					<input type="button" class="btn btn-secondary" name="btnCancel" value="Cancel">

					<button class="btn btn-primary">Register</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>