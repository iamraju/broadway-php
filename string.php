<?php

$name = "Broadway Infosys Nepal Pvt. Ltd.";

echo substr($name, 17, 8);
die;
echo str_replace("a", "#", $name);

die;

$students = ['Ram', "Shyam", "Sita"];
echo join("<br>", $students);

die;

$words = explode(" ", $name);

echo implode(",", $words);
die;

echo htmlentities('<b>something</b>');
die;

// find existence of a text in another string
if(strpos($name, 'B') !== false) {
	echo "Found";
}
else {
	echo "Not Found";
}
die;

// finding the length of a string
echo strlen($name);
die;