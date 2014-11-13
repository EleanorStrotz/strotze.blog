<?php
//helps us reach certian files with minimal work
	require_once(__DIR__ . "/../model/config.php");
?>

<h1>Create Blog Post</h1>

<!-- sends information to the post and echos the path for the information to follow -->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
<!-- div puts in the title and the label for the title -->
	<div>
		<label for="title">Title: </label>
		<input type="text" name="title" />
	</div>
<!-- div is a label for post -->
	<div>
		<label for="post">Post: </label>
		<textarea name="post"></textarea>
	</div>
	<!-- div is to create the submit button -->
	<div>
		<button type="submit" class="btn btn-success">Submit</button>
	</div>
</form>