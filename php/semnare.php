<?php

require 'conection.php';
session_start();

$username=$_REQUEST['username'];
$petition=$_REQUEST['name'];

$sql= "SELECT * FROM signatures WHERE petition='$petition' AND user='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$count = mysqli_num_rows($result);

$sql="SELECT * FROM petiton WHERE NAME='$petition'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$number=$row[signatures];

if($count == 0)
{
	$sql= "INSERT into signatures (petition, user) VALUES ('$petition', '$username') ";
	$result = mysqli_query($conn, $sql);
	
    $number = $number +1;
    $sql="UPDATE petition SET signatures='$number' WHERE NAME='$petition'";
    $result = mysqli_query($conn, $sql);

		header("Location: petitions.php");
}