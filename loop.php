<?php
// Accessing arrays using loops


// looping : performing repeatative tasks/actions

// infinite
$counter = 1;
echo '<h1>Even Numbers</h1>';
while(1) {
	$counter++;
	if($counter % 2 !== 0) {
		continue;
	}

	if($counter > 100) {
		break;
	}
	echo "$counter<br>";
}
die;
//for
//while
//do.... while
// do while

$i = 0;
do {
	echo "$i. Do while !<br>";
	$i++;
}
while($i <= 10);

die;

// while loop
$i = 1;
while($i <= 10) {
	echo "$i<br>";
	$i++;
}
die;

// ================================
// for loop
for($i = 1; $i <= 10; $i++) {
	echo "$i. Broadway !<br>";
}

die;