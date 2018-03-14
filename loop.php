<?php
echo "<pre>";
/*$array = [
	['11', '12', '13'],
	['21', '22', '23'],
	['31', '32', '33']
];

print_r($array);die;
foreach($array as $key => $arr) {
	echo "<strong>$key</strong><br>";
	foreach($arr as $index => $value) {
		echo "$index=>$value<br>";
	}
}
die;*/

$students = [
	[ //0
		'name' 		=> "Ram Sharma",
		'age' 		=> 31,
		'email' 		=> 'ram@gmail.com',
		'college' 	=> 'Swastik',
	],
	[ //1
		'name' 		=> "Sita Sharma",
		'age' 		=> 19,
		'email' 		=> 'ram@gmail.com',
		'college' 	=> 'Swastik',
	],
	[ //2
		'name' 		=> "Hari Sharma",
		'age' 		=> 25,
		'email' 		=> 'hari@gmail.com',
		'college' 	=> 'Swastik',
	],
	[ //3
		'name' 		=> "Rita Sharma",
		'age' 		=> 20,
		'email' 		=> 'rita@gmail.com',
		'college' 	=> 'Swastik',
	]
];
// print_r($students);die;
echo "<table border='1' width='500'>";

$counter = 1;
foreach($students as $student) {
	if($counter === 1) {
		echo '<tr>';
		foreach($student as $key => $value) {
			echo '<th>' . ucfirst($key) . '</th>';
		}
		echo '</tr>';
	}

	echo '<tr>
		<td>' . $student['name'] . '</td>
		<td>' . $student['age'] . '</td>
		<td>' . $student['email'] . '</td>
		<td>' . $student['college'] . '</td>
	</tr>';

	echo '<tr>';
	foreach($student as $value) {
		echo '<td>' . $value . '</td>';
	}
	echo '</tr>';

	$counter++;
}
echo "</table>";
die;


$array = [
	['11', '12', '13'],
	['21', '22', '23'],
	['31', '32', '33']
];
print_r($array);
die;
// Associative array using foreach()
$student = [
	'name' 		=> "Ram Sharma",
	'age' 		=> 30,
	'college' 	=> 'Swastik',
	'fatherName' => 'Hari Sharma',
	'asdfasdfadsf',
];

echo '<h1>Associative Array using foreach()</h1>';
foreach($student as $key => $value) {
	echo ucfirst($key) . " : $value<br>";
}
die;
// Accessing arrays using loops
$fruits = [
	'Apple',
	'Pineapple',
	'Mango',
	'Orange',
];
echo '<h1>Using foreach()</h1>';
foreach($fruits as $index => $element) {
	echo "$index. $element<br>";
}
die;

//echo $fruits;die;
$i = 0;
echo '<h1>Using while()</h1>';
while($i < count($fruits)) {
	echo $fruits[$i] . "<hr>";
	$i++;
}
die;
echo '<h1>Using for()</h1>';
for($i = 1; $i < count($fruits); $i++) {
	echo $fruits[$i] . "<hr>";
}

die;
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