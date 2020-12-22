<!doctype html>
<html>
	<head>
		<title>Create New Article</title>
	</head>
	<body>
		<?php require_once('nav.php'); ?>
		<h1>New Article</h1>
		<form method="post" action="dh.php">
			<label>
				Author<br>
				<input type="text" name="author">
			</label>
			<br>
			<label>
				Title<br>
				<input type="text" name="title">
			</label>
			<p>Category</p>
			<label>
				<input type="radio" name="cat" value="politics"> Politics
			</label>
			<br>
			<label>
				<input type="radio" name="cat" value="entertainment"> Entertainment
			</label>
			<br>
			<label>
				<input type="radio" name="cat" value="arts"> Arts
			</label>
			<br>
			<label>
				<input type="radio" name="cat" value="local"> Local
			</label>
			<br>
			<br>
			<label>
				Article
				<br>
				<textarea name="article"></textarea>
			</label>
			<br>
			<input type="submit" value="Save">
		</form>


	</body>
</html>