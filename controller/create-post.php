<?php
// require once connects create-post with database.php
	require_once(__DIR__ . "/../model/database.php");
// connection variable connects host, username, password, and database to create-post.php
	$connection = new mysqli($host, $username, $password, $database);

//variable filter the input, gets the posts from the title and filters its to make sure its a string
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	// variable filter the input, gets the posts from the post and filters it to make sure its a string
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
   // variable query makes a query for the variables post and title
	$query = $connection->query("INSERT INTO posts SET title = '$title', post ='$post'");
    // if statement checks if $query is running correctly
    if($query) {
    	// echo is used if $query is successfully working/ if it is true
    	echo "<p>Successfully inserted post: $title</p>";
       }
       // else statement outputs if there is an error 
       else {
       	 echo"<p>$connection->error</p>";
       }
	// closes our connection
	$connection->close();
?>