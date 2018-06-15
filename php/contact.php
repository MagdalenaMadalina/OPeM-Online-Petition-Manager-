<html>
<head>
	<title>Contact Gorm Design</title>
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>

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
					<li><a class="homered" href="contact.php">CONTACT</a></li>
				</ul>
			</nav>
		</div>
</header>

<body>
	<div class="contact-title">
		<h1>Say Hello</h1>
		<h2>CHANGE THE WORLD!!</h2>

	</div>
	<div class="contact-form">
		<form id="contact-form" method="post" action="contact.inc.php">
		    <p>Name</p>
			<input name="name" type="text" class="form-control" placeholder="Your name" required><br>
			<p>Email</p>
			<input name="email" type="email" class="form-control" placeholder="Your email" required><br>
			<p>Message</p>
			<textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea><br>
			<input type="submit" class="form-control submit" values="SEND MESSAGE">

		</form>
	</div>

</body>
</html>