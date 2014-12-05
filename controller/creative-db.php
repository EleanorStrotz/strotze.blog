<?php

//Looks for config.php 
 require_once(__DIR__ . "/../model/config.php");
// connects our host, username, and password to mysqli

    // created a table within a database
	$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		. "title varchar(235) NOT NULL,"
	//shows text
	    . "post text NOT NULL,"
	    // table for date time propertie
	    . "DateTime datetime NOT NULL,"
	    . "PRIMARY KEY (id) )");
//outputs the $query saying if it is true or false
	if($query){
         echo "<p>Succesfully created table: posts</p>";
		}
		else {
			echo "<p>" . $_SESSION["connection"]->error . "</p>";
		}

		// creates a database for the users
		$query = $_SESSION["connection"]->query("CREATE TABLE users("
			. "id int(11) NOT NULL AUTO_INCREMENT,"
			. "username varchar(30) NOT NULL,"
			. "email varchar(50) NOT NULL,"
			. "password char(128) NOT NULL,"
			. "salt char(128) NOT NULL,"
			. "PRIMARY KEY (id))");
		// if/else statement checks if we properly created a database 
		if ($query) {
			echo "<p>Successfully created table: users</p>";
		}
		else{
			echo "<p>" . $_SESSION["connection"]->error . "</p>";
		}


 ?>