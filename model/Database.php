<?php
// A class is a collection of variables and functions working with these variables. Making a database as an object
// we create classes to store our variables public or private 
class Database {
	// member/ instance variables
	// private variables can only be accessed from Database.php
	private $connection;	
	private $host;
	private $username;
	private $password;
	private $database;

    // The constructor is called on an object after it has been created, and it is a good place to put initialisation code.
    // the variables inside of the braces are global variables
	public function __construct($host, $username, $password, $database){
		// accesses global variables by using the key word this then the arrow which will give us access to the global variables.
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}
}

?>