<?php
// File management
// file_exists, fopen, fwrite, fclose, copy, file_get_contents, file_put_contents
// unlink/delete, basename, file

$filename = "test.txt";
$target = "logs";
$logName = 'php.log';

$dateFilename = date('Ymd') . ".log";
echo $dateFilename;

function writeLog($content) {

}

die;
// copying
if(!file_exists($target)){
	echo "$target was created!";
	mkdir($target);
}

if(copy($filename, "$target/hello.txt")) {
	echo "$filename is copied";
}
else {
	echo "There was problem while copying the file.";
}
die;

// writing to files
// fopen, fwrite, fclose
$fileHandle = fopen($logName, 'a+');
fwrite($fileHandle, "Something to write\n\n");
fclose($fileHandle);
die;

// retrieving the file contents
if(!file_exists($filename)) {
	touch($filename);
}

$googleContent = file_get_contents('http://www.google.com');
file_put_contents('googlecontent.txt', $googleContent);
die;

$currentDir = dirname(__FILE__);
echo $currentDir;
touch("$currentDir/myfile.log");
die;

// deleting a file
if(file_exists($filename)) {
	unlink($filename);
}
else {
	echo "File does not exist!";
}
die;

// check file or directory existence
if(file_exists($directory)) {
	echo "File/directory exists";
}
else {
	// creates a directory if not exists
	mkdir($directory);
	echo "Directory did not exist, so created!";
}
die;
