<?php
include "includes/sources.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Students</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<?php include "includes/header.php"; ?>
	<table border="1" width="500">
		<tr>
			<td>Name</td>
			<td>Age</td>
			<td>College</td>
		</tr>
		<?php foreach($students as $student) {?>
		<tr>
			<td><?php echo $student['name']; ?></td>
			<td><?php echo $student['age']; ?></td>
			<td><?php echo $student['college']; ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>