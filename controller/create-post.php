<?php
// require once connects create-post with config.php
	require_once(__DIR__ . "/../model/config.php");

//variable filter the input, gets the posts from the title and filters its to make sure its a string
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	// variable filter the input, gets the posts from the post and filters it to make sure its a string
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
   
// date time implments the date and time that the post was posted
  $date = new DateTime ('today');

  // variable query makes a query for the variables post and title
	$query = $connection->query("INSERT INTO posts SET title = '$title', post ='$post', DateTime = '$date'");
    // if statement checks if $query is running correctly
    if($query) {
    	// echo is used if $query is successfully working/ if it is true
    	echo "<p>Successfully inserted post: $title</p>";
      echo "<p>$date->format('m/d/y')</p>";
       }
       // else statement outputs if there is an error 
       else {
       	 echo"<p>$connection->error</p>";
       }
?>
<!-- 2:14 -->