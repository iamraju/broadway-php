<?php
// Multiple File upload
// is_uploaded_file
// move_uploaded_file
echo "<pre>";
//print_r($_FILES);
$photoAllowedTypes = [
			'image/jpeg', 
			'image/jpg', 
			'image/png', 
			'image/gif'
		];
$photos = $_FILES['photos'];
$totalFilesUploaded = count($photos['tmp_name']);
for($i = 0; $i < $totalFilesUploaded; $i++) {
	$isUploaded = is_uploaded_file($photos['tmp_name'][$i]);
	if($isUploaded === true) {
		$filename = $photos['name'][$i];
		$type = $photos['type'][$i];
		if(in_array($type, $photoAllowedTypes)){
			move_uploaded_file($photos['tmp_name'][$i], 'photos/' . $filename);
			echo "<span style='color: green;'>File was uploaded.</span><br>";
		}
		else {
			echo "<span style='color: red;'>Invalid photo type!</span><br>";
		}
	}
	else {
		echo "<span style='color: red;'>No photo was uploaded!</span><br>";
	}
}

die;