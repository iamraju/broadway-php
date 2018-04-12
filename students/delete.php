<?php
include "database.php";

// Get particular (single) student's record from the database
$id = (int) $_GET['student_id'];
$result = $mysqli->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();

// Before deleting, check if the student ID exists
if($result->num_rows === 0) {
	$_SESSION['error'] = "Sorry, no student found with ID = $id";
	header("Location: list.php");
	die;
}

// Delete the record.
$result = $mysqli->query("DELETE FROM students WHERE id=$id");

$_SESSION['success'] = "The student {$row['name']} was deleted successfully.";
header("Location: list.php");
die;