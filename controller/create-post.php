<?php
	
//variable filter the input, gets the posts from the title and filters its to make sure its a string
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	// variable filter the input, gets the posts from the post and filters it to make sure its a string
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
//echos title and post
	echo "<p>Title: $title</p>";
	echo "<p>Post: $post</p>";
?>