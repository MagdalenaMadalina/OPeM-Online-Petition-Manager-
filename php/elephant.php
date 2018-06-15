<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=devide-width">
	<meta name="description" content="Petition web manager">
	<title> CHANGE THE WORLD</title>
	<link rel="stylesheet" type="text/css" href="elephant.css">
</head>
<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1>Change the world!</h1>
			</div>
			<nav>
				<ul>
					<li><a class="" href="project.php">HOME</a></li>
					<li><a class="" href="#about">ABOUT US</a></li>
					<li><a class="" href="login.php">LOGIN</a></li>
					<li><a class="" href="signUp.php">SIGNUP</a></li>
					<li><a class="" href="create.php">CREATE A PETITION</a></li>
					<li><a class="" href="contact.php">CONTACT</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div id="petition-col" class="col">
	    <div class="thumbnail">
	        <img src="https://dingo.care2.com/pictures/petition_images/petition/746/793851-1510848054-wide.jpg"/>
	    </div>
	    <h1>Save Elephants and Lions <br> Stop Trump's Trophy Hunting Plan</h1>
	 

	    
	    <div class="petition-col">

	        <a class="button2" >Sign Petition</a> 
	        <p><em><strong>Urgent update: Trump just announced that the Fish and Wildlife Service will now allow &quot;trophy&quot; imports of dead elephants and lions on a &quot;case-by-case&quot; basis. This is completely unacceptable. Please sign and share to protect animals and keep the total ban on this cruelty!&nbsp;</strong></em></p>
            <p><strong>President Trump just opened the door to expanded sport hunting of some of the world's most beloved &mdash; and imperiled &mdash; animals: Africa's elephants and lions.</strong> We need your signature today to help stop him.</p>

            <p>Near the turn of the 20th century, Africa was home to between three and five million elephants. Now less than half a million remain. Africa's lions have seen similar declines, with lion numbers declining by 42 percent in just the last 20 years.<br /><br />To save these iconic animals from extinction, the Obama administration banned the importation of elephant trophies from Zambia and Zimbabwe and made importing lion pelts and other trophies more difficult.
            </p>

            <p>Now President Trump &mdash; whose sons have boasted publicly of killing rare animals in Africa &mdash; has reversed this animal-saving ban.<br /><br /><strong>This reversal&nbsp;will almost inevitably increase poaching of these rare animals.</strong> According to Jeffrey Flocken of the International Fund for Animal Welfare:<br /><br />&quot;When a species' greatest value is as a dead trophy, its days will inevitably be numbered, just as they are when the value of their parts <strong>&mdash;&nbsp;</strong>like ivory tusks, tiger skins, or rhino horn <strong>&mdash;</strong>&nbsp;make protection from poachers nearly impossible.&quot;</p>

            <p><strong>The move is also squarely at odds with public opinion in the US.</strong> 82% of Americans surveyed support banning lion trophies, and 83% support banning elephant trophies.</p>

        <a class="button2" href="sign.html">Sign Petition</a> 

        <div class="button2">
                <?php
                    $title=urlencode("CHANGE THE WORLD");
                    $url=urlencode("http://localhost/TW/elephant.php");
                    $summary=urlencode("Be ready to change the world!");
                    
                ?>
                <a id="button" onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[summary]=<?php echo $summary;?>&amp;p[url]=<?php echo $url; ?>&amp;?>', 'sharer', 'toolbar=0,status=0,width=550,height=400');" target="_parent" href="javascript: void(0)">
                    Share 
                </a>  
                <div class="counter">
                    <div id="fbcount"><?php echo $fbcount; ?></div>
                </div>
            </div>
        
        </div>
    </div>
    


<footer>
        
        <section class="quote">
        <div class="containerWidth">
            <div class="quote">
                <p>
                    "The best way to predict the future is to create it! <br> - Denis Gabor"
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
                    <strong>Care2 Stands With: </strong> humanitarians, animal lovers, feminists, rabble-rousers, nature-buffs, creatives,<br> the naturally curious, and people who really love to do the right thing. <br><br><strong>You are our people. You Care. We CHANGE THE WORLD!</strong>
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