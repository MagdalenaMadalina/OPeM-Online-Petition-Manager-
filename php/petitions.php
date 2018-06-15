<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=devide-width">
	<meta name="description" content="Petition web manager">
	<title> CHANGE THE WORLD</title>
	<link rel="stylesheet" type="text/css" href="petitions.css">
</head>
<body>



	<header>
		<div class="container">
			<div id="branding">
				<h1>Change the world!</h1>
			</div>
			<nav>
				<ul>
					<li><a class="homered" href="petitions.php">PETITIONS</a></li>
					<li><a class="" href="person.php">MY PAGE</a></li>
					<li><a class="" href="logout.php">LOGOUT</a></li>
					<li><a class="" href="contact.php">CONTACT</a></li>
					<li><form action="search.php"><input type="text" name="q" placeholder="Search">
                    <input type="submit" name="search" value="Search"></form></li>
				</ul>
			</nav>
		</div>
	</header>

	<section id="showcase">
		<div class="container">
			<h1>CHANGE THE WORLD WITH US!</h1>
			<p> "The best way to predict the future is to create it!" - Denis Gabor</p>
		</div>
	</section>

    <div class="sticky" id="mysticky">
        <div id="branding">
                <h3>SIGN PETITION</h3>
            </div>
            <form action="semnare.php" method="post">
                    <p>Username</p>
                    <input type="text" name="username" placeholder="Enter your username" required>
                    <p>Petition</p>
                    <input type="text" name="name" placeholder="Enter the name of the petition" required><br>
                    <input type="submit" name="" value="Sign"> 
                </form>
    </div>

    <script>
        window.onscroll = function() {
            myFunction();
        }
        var stick = document.getElementById("mysticky");
        var stic = sticky.offsetTop;

        function myFunction()
        {
            if(window.pageYOFFset >= stic){
                sticky.classList.add("sticky");
            }
            else{
                sticky.classList.remove("sticky");
            }

        }
    </script>
    
    <div class="petitii">
             
        	<?php
             $servername = "localhost";
             $username = "root";
             $password = "";
             $dbname = "petition_manager";

             // Create connection
             $conn = mysqli_connect($servername, $username, $password, $dbname);
             // Check connection
             if (!$conn) {
             die("Connection failed: " . mysqli_connect_error());
             }

             $sql = "SELECT ID_petition, Name, description, category, userID, photo FROM petition";
             $result = mysqli_query($conn, $sql);

             if (mysqli_num_rows($result) > 0) {
             // output data of each row
               while($row = mysqli_fetch_assoc($result)) {
                  
                  echo "<h3>" .$row["Name"]. "</h3><br>";

                  echo "<h4>" .$row["description"]. "</h4><br><br>";
                  
                  
               }
            } else {
              echo "0 results";
            }

            mysqli_close($conn);
            ?>
        </div>

	<footer>
        
        <section class="quote">
        <div class="containerWidth">
            <div class="quote">
                <p>
                    "The best way to predict the future is to create it! - Denis Gabor"
                </p>
            </div>

            <a class="button" href="create.html">Start Petition</a>
        </div>
        </section>

        

        <section class="mission_statement">
        <div class="containerWidth">
            <div class="promise">
                <div id="about" class="logo"><h7>CHANGE THE WORLD! ABOUT US</h7></div>

                <p>
                    <strong>Our Promise: </strong> Welcome to CHANGE THE WORLD, the world’s largest community for good.<br> Here, you’ll find 45 million like-minded people working towards progress, kindness, and lasting impact. 
                </p>
             
                <p>
                    <strong>CHANGE THE WORLD Stands Against: </strong> bigots, bullies, science deniers, misogynists, gun lobbyists, xenophobes,<br> the willfully ignorant, animal abusers, frackers, and other mean people. If you find yourself aligning<br> with any of those folks, you can move along, nothing to see here.
                </p>

                <p>
                    <strong>CHANGE THE WORLD Stands With: </strong> humanitarians, animal lovers, feminists, rabble-rousers, nature-buffs, creatives,<br> the naturally curious, and people who really love to do the right thing. <br><br><strong>You are our people. You Care. We CHANGE THE WORLD!</strong>
                </p>
            </div>
        </div>    
        </section>

        <section class="copyright">
            <p>Change The World, Copyright &copy; 2018</p>
        </section>    
	</footer>
</body>
</html>
