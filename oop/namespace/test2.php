<?php

function __autoload($className) {
	$classNames = str_replace('\\', '/', $className);
	
	$classFileName = "$classNames.php";

    if(file_exists($classFileName)) {
    	include $classFileName;
    }
};

$objBroadwayDb = new Broadway\Database\DbConnection();
$objBroadwayDb->connect();
