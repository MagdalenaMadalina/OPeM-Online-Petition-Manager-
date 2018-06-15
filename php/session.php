<?php

require 'conection.php';
session_start();

$user_check = $_SESSION['myusername'];

$ses_sql = mysqli_query($conn, "select UserName from users where UserName=$user_check");

$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

$login_session = $row['UserName'];

if(!isset($_SESSION['myusername']))
{
	header("Location: login.php");
}