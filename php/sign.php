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
					<li><a href="project.php">HOME</a></li>
					<li><a href="login.php">LOGIN</a></li>
					<li><a href="signUp.php">SIGNUP</a></li>
					<li><a href="create.php">CREATE A PETITION</a></li>
					<li><a href="contact.php">CONTACT</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="start-petition">
		<h1>Start a petition</h1>
		<h2>CHANGE THE WORLD!</h2>

	</div>
	<div class="start-a-petition">
		<form id="contact-form" method="post" action="">
		    <p>Name</p>
			<input name="name" type="text" class="form-control" placeholder="Your name" required><br>
			<p>Username</p>
			<input name="name" type="text" class="form-control" placeholder="Your Username" required><br>
			<p>Email</p>
			<input name="email" type="email" class="form-control" placeholder="Your email" required><br>
			<p>Name of the Petition</p>
			<input name="name" type="text" class="form-control" placeholder="Name of the Petition" required><br>
			<p>Motivation</p>
            <textarea name="message" class="form-control" placeholder="What do you want to achieve?" rows="4" required></textarea><br>
			<input type="submit" class="form-control submit" values="SEND PETITION">

		</form>
	</div>

</body>
</html>