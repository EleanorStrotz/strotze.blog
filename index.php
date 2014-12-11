<?php
	// creates link to login-verify.php
	require_once(__DIR__ . "/controller/login-verify.php");
    // require__once links index.php with header.php
	require_once(__DIR__ . "/view/header.php");
	// if statement makes sure that navigation only gets displayed on wheter the user has logged in or not
	if(authenticateUser){
	/* Creates/links Database to navigation.php*/
	require_once(__DIR__ . "/view/navigation.php");
    }
	/* Creates/links Database to index.php*/
 	require_once(__DIR__ . "/controller/creative-db.php");
 	// require_once links index.php with footer.php
 	require_once(__DIR__ . "/view/footer.php");
 	// require_once links index.php with read-posts.php
 	require_once(__DIR__ . "/controller/read-posts.php");
?>
<!-- sticky header code -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<header>
	<h1>Eleanor's Blog</h1>
	<nav> <a href="">Home</a> <a href="">About</a> <a href="">Portfolio</a> <a href="">Services</a> <a href="">Contact</a> </nav>
</header>
<main class="wrapper">
</main>