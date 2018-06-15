<?php

require 'conection.php';
session_start();

$r=session_id();



$name=$_REQUEST['name'];
$category=$_REQUEST['category'];
$description=$_REQUEST['description'];
$pic=$_REQUEST['photo'];

$sql="SELECT NAME FROM petition WHERE NAME='$name'";
$result=mysqli_query($conn, $sql);
$check=mysqli_num_rows($result);

$sql1="SELECT * from sessions WHERE session_ID='$r'";
$result1=mysqli_query($conn, $sql1);
$row = mysqli_fetch_array($result1, MYSQLI_ASSOC);

if($check > 0){
	header("Location: create.php?info=exista");
	die();
}else{
	$sql="INSERT INTO petition (NAME, description, category, userID) VALUES ('$name', '$description', '$category', '$row[user_ID]')";

    $result=mysqli_query($conn, $sql);


    header("Location: person.php?info=ok");
}