<?php
// CRUD = Create (INSERT), Read (SELECT), Update (UPDATE) & Delete (DELETE)

include "database.php";

/*$sql = "CREATE TABLE colleges (
	id int(10) not null auto_increment primary key,
	name varchar(200) not null,
	status smallint(4) not null default '1'
)";*/

$sql = "SELECT * FROM students ORDER BY id DESC";

$result = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Students Management</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3>Students Management : Listing</h3>
			</div>
			<div class="col-md-2">
				<a href="add_student.php" class="btn btn-primary pull-right">Add New</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php if(isset($_SESSION['success'])) {?>
				<div class="alert alert-success">
					<?php
					echo $_SESSION['success'];
					unset($_SESSION['success']);
					?>
				</div>
				<?php } ?>

				<?php if(isset($_SESSION['error'])) {?>
				<div class="alert alert-danger">
					<?php
					echo $_SESSION['error'];
					unset($_SESSION['error']);
					?>
				</div>
				<?php } ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered table-hover">
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Date Of Birth</th>
						<th>Status</th>
						<th>Gender</th>
						<th>Actions</th>
					</tr>
					<?php if($result->num_rows > 0) {?>

					<?php 
					$counter = 1;
					while($row = $result->fetch_assoc()) {?>

					<tr>
						<td><?php echo $counter; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['date_of_birth']; ?></td>
						<td><?php echo $row['status'] == 1 ? 'Active' : 'Inactive'; ?></td>
						<td><?php echo $row['gender']; ?></td>
						<td>
							<a href="edit_student.php?student_id=<?php echo $row['id']; ?>">Edit</a> | 
							
							<a onclick="return confirmStudentDelete();" href="delete.php?student_id=<?php echo $row['id']; ?>">Delete</a>
						</td>
					</tr>

					<?php
					$counter++;
					 } ?>

					<?php } else { ?>

					<tr>
						<td colspan="7">No students found.</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<?php echo "$result->num_rows student(s) found."; ?>
			</div>
		</div>
	</div>
<script>
function confirmStudentDelete(){
	if(confirm('This will delete record permanently, are you sure to delete it?')){ 
		return true; 
	}
	else{
		return false;
	}
}
</script>
</body>
</html>