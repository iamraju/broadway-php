<?php
function __autoload($abc) {
	echo $className;die;
	include "$className.php";
}

use Student\Student;
use Teacher\Teacher;

$objStudent = new Student("Ram Student");
echo $objStudent->getName();

echo '<hr>';

$objStudent = new Teacher("Shyam Teacher");
echo $objStudent->getName();