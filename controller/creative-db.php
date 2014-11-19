<?php

//Looks for config.php 
 require_once(__DIR__ . "/../model/config.php");
// connects our host, username, and password to mysqli
$connection = mysqli($host, $username, $password);

// this if/else statement is used if there is a conncetion error 
if($connection->connect_error) {
    die("<p>Error: " . $connection->connect_error . "</p>");
	}
	// this line of code shows that there is a connection with the database
	$exists = $connection->select_db($database);
    
    //creates the variable database for my admin
	if(!$exists){
       $query = $connection->query("CREATE DATABASE $database");

       // successfully creates database
       if($query){
           echo "<p>Successfully created database: " . $database . "</p>";
       }
	}
	else {
		echo "<p>Database already exists.</p>";
	}
    // created a table within a database
	$query = $connection->query("CREATE TABLE posts ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		. "title varchar(235) NOT NULL,"
	//shows text
	    . "post text NOT NULL,"
	    . "PRIMARY KEY (id) )");
//outputs the $query saying if it is true or false
	if($query){
         echo "<p>Succesfully created table: posts</p>";
		}
		else {
			echo "<p>$connection->error</p>";
		}

        //closes conncection
		$connection->close();
 ?>