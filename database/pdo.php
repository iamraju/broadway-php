<?php
// Connect to the database server and selecting database

$pdo = new \PDO('mysql:host=localhost;dbname=broadway_php', 'broadway', 'broadway');

// echo "Connected to the database.";

// echo '<hr>';

// SELECT * FROM students;
// showing the tables in the database

$status = isset($_GET['status']) ? (int) $_GET['status'] : 0;

$name = isset($_GET['name']) ? $_GET['name'] : null;

$sql = "SELECT * FROM students WHERE status=?";

$statement = $pdo->prepare($sql);

// $statement->bindParam(":nameValue", $name);
$statement->bindParam(":statusValue", $status);

$statement->execute();

echo "Total Found " . $statement->rowCount();
echo '<hr>';
$rows = $statement->fetchAll();
/*echo "Name:" . $row['name'];
echo "Name:" . $row->name;
// print_r($row);
die;
$result = $pdo->query($sql);*/
if($statement->rowCount() > 0) {
	// echo "Total Count : " . $result->rowCount();
	foreach($rows as $student) {
		print_r($student);
		echo '<hr>';
	}
}
else {
	echo "NO records found";
}
// Perform database operations.
