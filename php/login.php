<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=devide-width">
	<meta name="description" content="Petition web manager">
	<title> CHANGE THE WORLD</title>
	<link rel="stylesheet" type="text/css" href="login.css">
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
					<li><a class="homered" href="login.php">LOGIN</a></li>
					<li><a href="signup.php">SIGNUP</a></li>
					<li><a href="contact.php">CONTACT</a></li>
				</ul>
			</nav>
		</div>
	</header>
    

    <div class="title"><h1>LogIn</h1></div>
    <div class="cont">
    	<div class="left"></div>
    	<div class="right">
    		<div class="formBox">
    			<form action="login.inc.php" method="post">
    				<p>Username</p>
    				<input type="text" name="username" placeholder="Enter your Username" required>
    				<p>Password</p>
    				<input type="Password" name="password" placeholder="Enter your Password" required>
    				<input type="submit" name="" value="Sign In"><br>
    				<a href="#">Forget Password</a>
    			</form>
    		</div>
    	</div>
    </div>
</body>
</html>