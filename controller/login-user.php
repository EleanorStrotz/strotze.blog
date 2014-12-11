<?php
	// require once links config.php file to login-user.php file
   require_once(__DIR__ . "/..model/config.php");	

   //
   $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
   $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

   //query selects salt password from a username in our users table.
   $query = $_SESSION["connection"]->query("SELECT  salt,password FROM users WHERE username = '$username'");
	
	//checks if information is stored in the query variable
   if($query->num_rows == 1) {
   	 $row = $query->fetch_array();
   }

?>
