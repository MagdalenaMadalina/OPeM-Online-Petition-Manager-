

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=devide-width">
	<meta name="description" content="Petition web manager">
	<title> CHANGE THE WORLD</title>
	<link rel="stylesheet" type="text/css" href="singUp.css">
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
					<li><a class="homered" href="signup.php">SIGNUP</a></li>
					<li><a href="contact.php">CONTACT</a></li>
				</ul>
			</nav>
		</div>
	</header>
    
    <div class="title"><h1>SignUp</h1>
    
    </div>
    <div class="cont">
    	<div class="left"></div>
    	<div class="right">
    		<div class="formBox">
    			<form action="signUp.inc.php" action="POST">
    				<p>First Name</p>
    				<input type="text" name="Firstname" placeholder="Enter your first name" required>
    				<p>Last Name</p>
    				<input type="text" name="Lastname" placeholder="Enter your last name" required>
    				<p>Username</p>
    				<input type="text" name="Username" placeholder="Enter your Username" required>
    				<p>Your Password</p>
    				<input type="Password" name="Password" placeholder="Enter your Password" required>
    				<input type="submit" name="signup" value="Sign Up">
    			</form>
            <?php
    			    if($_GET['info']=='exista'){
    			    	echo '<p style=font-size:35px; text-align: center;>Username already exists.</p>';  	
    			  }
    			  else{
    			  	echo '<p style=font-size:35px; text-align: center;>Your account has been created.</p>';
    			  }
    			?>
    		</div>
    	</div>
    </div>
</body>
</html>