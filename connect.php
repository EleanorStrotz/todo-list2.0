<?php
//linked to localhost to successfully create database
//creates a secure connection
//created the database mysqli
$mysqli = new mysqli('localhost', 'root', 'root', 'todo');
//$mysqli->connect_error then we want is to die and have this message
if ($mysqli->connect_error) {
	die('Connect Error(' . $mysqli>connect_errno . ')'
		. $mysqli->connect_error);
}else{
	//echo "Connection made";
}
$mysqli->close();

?>