<?php

require 'conection.php';


session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$myusername = mysqli_real_escape_string($conn, $_REQUEST['username']);
	$mypassword = mysqli_real_escape_string($conn, $_REQUEST['password']);

	$sql= "SELECT * FROM users WHERE UserName='$myusername' AND Password = '$mypassword'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	$count = mysqli_num_rows($result);

	if($count == 1)
	{
		$r=session_id();
		$_SESSION['myusername'] = $row[UserName];

		$sql1= "INSERT into sessions (session_ID, user_ID) VALUES ('$r', '$row[ID]') ";
		$result1 = mysqli_query($conn, $sql1);
		
		header("Location: adminPage.php");
	}else{
		$error = "You Login Name or Password is invalid";
		header("Location: admin.php");
	}
}