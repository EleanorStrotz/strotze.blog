<?php
	// meta is the line of code for mobile responive
	<meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    // require__once links index.php with header.php
	require_once(__DIR__ . "/view/header.php");
	/* Creates/links Database to navigation.php*/
	require_once(__DIR__ . "/view/navigation.php");
	/* Creates/links Database to index.php*/
 	require_once(__DIR__ . "/controller/creative-db.php");
 	// require_once links index.php with footer.php
 	require_once(__DIR__ . "/view/footer.php");
?>

