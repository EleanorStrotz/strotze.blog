<?php

//Looks for config.php 
 require_once(__DIR__ . "/../model/config.php");
// connects our host, username, and password to mysqli

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


 ?>