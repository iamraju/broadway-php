<?php
include "database.php";
$result = $mysqli->query("SELECT * FROM students");
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
			<div class="col-md-12">
				<h3>Students Management : Listing</h3>
				<table class="table table-bordered table-hover">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Status</th>
					</tr>
					<?php if($result->num_rows > 0) {?>

					<?php while($row = $result->fetch_assoc()) {?>

					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['status'] == 1 ? 'Active' : 'Inactive'; ?></td>
					</tr>

					<?php } ?>

					<?php } else { ?>

					<tr>
						<td colspan="3">No students found.</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>