<?php
session_start();
?>
<html>
<head>
	<title>Start a petition</title>
	<link rel="stylesheet" type="text/css" href="create.css">
</head>
<body>
    
    <header>
		<div class="container">
			<div id="branding">
				<h1>Change the world!</h1>
			</div>
			<nav>
				<ul>
				    <li><a class="" href="person.php">MY PAGE</a></li>
					<li><a class="homered" href="create.php">CREATE A PETITION</a></li>
					<li><a href="contact.php">CONTACT</a></li>
					<li><a class="" href="logout.php">LOGOUT</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="start-petition">
		<h1>Start a petition</h1>
		<h2>CHANGE THE WORLD!</h2>

	</div>
	<div class="start-a-petition">
		<form id="contact-form" method="post" action="create.inc.php">
		    <p>Name</p>
			<input name="name" type="text" class="form-control" placeholder="Name of the Petition" required><br>
			<p>Category</p>
			<input name="category" type="text" class="form-control" placeholder="What is the category?" rows="1" required><br>
			<p>Photo URL</p>
			<input type="text" name="photo" class="form-control">
			<p>Description</p>
            <textarea name="description" class="form-control" placeholder="Description of the Petition" rows="75" required></textarea><br>
			<input type="submit" class="form-control submit" values="SEND PETITION">

		</form>
	</div>

</body>
</html>