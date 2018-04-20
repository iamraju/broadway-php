<?php
session_start();

$mysqli = new MySQLi('localhost', 'broadway', 'broadway', 'broadway_php');
if($mysqli->connect_error) {
	echo "There was problem connecting to the database server.The error is:<br>";
	echo $mysqli->connect_error;
	die;
}


/**
create table users(
	id int(10) not null primary key auto_increment,
	username varchar(100) not null,
	password varchar(100) not null,
	status smallint(4) not null default '1',
	last_login datetime
);
*/