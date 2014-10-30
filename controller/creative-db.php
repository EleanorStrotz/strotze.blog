<?php

//Looks for database.php 
 require_once(__DIR__ . "/../model/database.php");

// connects our host, username, and password to mysqli
$connection = new mysqli($host, $username, $password);

// this if/else statement is used if there is a conncetion error 
if($connection->connect_error) {
    die("Error: " . $connection->connect_error);
	}
	// this line of code shows that there is a connection with the database
	$exists = $connection->select_db($database);
    
    //creates the variable database for my admin
	if(!$exists){
       $query = $connection->query("CREATE DATABASE $database");

       // successfully creates database
       if($query){
           echo "Successfully created database: " . $database;
       }
	}
	else {
		echo "Database already exists.";
	}
    // created a table within a database
	$query = $connection->query("CREAT TABLE posts ("
		. "id int (1) NOT NULL AUTO_INCREMENT,"
		. "title varchar235) NOT NULL,"
	    . "post text NOT NULL,"
	    . "PRIMARY KEY (id)");
        //closes conncection
		$connection->close();
 ?>