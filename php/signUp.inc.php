<?php

require 'conection.php';


$Firstname=$_REQUEST['Firstname'];
$Lastname=$_REQUEST['Lastname'];
$Username=strtolower($_REQUEST['Username']);
$Password=$_REQUEST['Password'];


$sql="SELECT UserName FROM users WHERE UserName='$Username'";
$result=mysqli_query($conn, $sql);
$check=mysqli_num_rows($result);



if($check > 0){
	header("Location: signUp.php?info=exista");
	die();
}else{
	$sql="INSERT INTO users (FirstName, LastName, UserName, Password) VALUES ('$Firstname', '$Lastname', '$Username', '$Password')";

    $result=mysqli_query($conn, $sql);


    header("Location: signUp.php?info=ok");
} 

