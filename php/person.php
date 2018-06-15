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
					<li><a class="homered" href="person.php">MY PAGE</a></li>
					<li><a class="" href="create.php">CREATE A PETITION</a></li>
					<li><a class="" href="petitions.php">PETITIONS</a></li>
					<li><a class="" href="contact.php">CONTACT</a></li>
					<li><a class="" href="logout.php">LOGOUT</a></li>
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

	<div class="petitii">
	    <h2>The state of your petitions: </h2>
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
             $r=session_id();
             $sql="SELECT * FROM sessions where session_ID='$r'";
             $result=mysqli_query($conn, $sql);
             $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

             $sql = "SELECT ID_petition, NAME, description, category, userID, photo, signatures FROM petition where userID='$row[user_ID]'";
             $result = mysqli_query($conn, $sql);

             if (mysqli_num_rows($result) > 0) {
             // output data of each row
               echo "<table border='1'>
                        <tr>
                        <th>NAME</th>
                        <th>signatures</th>
                      </tr>";
               while($row = mysqli_fetch_assoc($result)) {

                  echo "<tr>";
                  echo "<td>" . $row['NAME'] . "</td>";
                  echo "<td>" . $row['signatures'] . "</td>";
                  echo "</tr>";
                  
               }
            } else {
              echo "0 results";
            }
            echo "</table>";

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

</body>
</html>