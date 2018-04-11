<?php
// CRUD = Create (INSERT), Read (SELECT), Update (UPDATE) & Delete (DELETE)
include "database.php";

$id = $_GET['student_id'];

$result = $mysqli->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();

if($result->num_rows === 0) {
	$_SESSION['error'] = "Sorry, no student found with $id";
	header("Location: list.php");
	die;
}
$error = '';
if($_SERVER['REQUEST_METHOD'] === 'POST') {
	// print_r($_POST); die;

	$studentName = $_POST['student_name'];
	$studentEmail = $_POST['student_email'];
	$dateOfBirth = $_POST['date_of_birth'];
	$studentGender = $_POST['student_gender'];
	$studentStatus = $_POST['student_status'];

	if(empty($studentName) || empty($studentEmail)) {
		$error = "Validation error ! <br>Either name or email is empty.";
	}
	else {
		$sql = "INSERT INTO students SET 
				name='$studentName',
				email='$studentEmail',
				date_of_birth='$dateOfBirth',
				status=$studentStatus,
				gender='$studentGender'";

		if($mysqli->query($sql)) {
			$_SESSION['success'] = "Student added successfully.";
			header("Location: list.php");
			die;
		}
		else {
			$_SESSION['error'] = "Sorry, there was problem while adding student.";
			header("Location: list.php");
			die;
		}
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Students Management</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h3>Edit Student</h3>

		<?php if(!empty($error)){ ?>
			<div class="alert alert-danger">
				<?php echo $error; ?>
			</div>
		<?php } ?>

		<form name="frm_add" action="" method="post">
			<div class="row form-group">
				<div class="col-md-3">
					<label for="student_name">Name</label>
				</div>
				<div class="col-md-7">
					<input type="text" class="form-control" id="student_name" name="student_name" value="<?php echo $row['name']; ?>">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-3">
					<label for="student_email">Email</label>
				</div>
				<div class="col-md-7">
					<input type="email" class="form-control" id="student_email" name="student_email">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-3">
					<label for="student_email">Date of birth</label>
				</div>
				<div class="col-md-7">
					<input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-3">
					<label>Gender</label>
				</div>
				<div class="col-md-7">
					  <label>
					  	<input type="radio" value="Male" name="student_gender"> Male 
					  </label>
					
					  <label><input type="radio" value="Female" name="student_gender"> Female </label>
					
					  <label><input checked="" type="radio" value="other" name="student_gender"> Other </label>
					
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-3">
					<label>Status</label>
				</div>
				<div class="col-md-7">
					  <label>
					  	<input type="radio" checked="" value="1" name="student_status"> Active 
					  </label>
					
					  <label><input type="radio" value="0" name="student_status"> Inactive </label>
					
				</div>
			</div>

			<a href="list.php" class="btn btn-secondary">Cancel</a>
		  <button type="submit" class="btn btn-primary pull-right">Submit</button>

		</form>
	</div>
</body>
</html>