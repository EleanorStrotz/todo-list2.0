<?php

//Looks for config.php 
 require_once(__DIR__ . "/../model/config.php");
// connects our host, username, and password to mysqli

		// creates a database for the users
		$query = $_SESSION["connection"]->query("CREATE TABLE users("
			. "id int(11) NOT NULL AUTO_INCREMENT,"
			. "username varchar(30) NOT NULL,"
			. "password char(128) NOT NULL,"
			. "salt char(128) NOT NULL,"
			. "PRIMARY KEY (id))");
		if($query){
			echo "<p>Successfully created table: users</p>";
		}
		else{
			echo"<p>" .$_SESSION["connection"]->error . "</p>";
		}