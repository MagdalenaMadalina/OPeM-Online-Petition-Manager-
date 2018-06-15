<?php  

require 'conection.php';

$message=$_REQUEST['message'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];

$sql="INSERT INTO contacts (message, name, email) VALUES ('$message','$name','$email')";
$result=mysqli_query($conn, $sql);

header("Location: project.php");