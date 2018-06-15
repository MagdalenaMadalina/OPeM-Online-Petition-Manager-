<?php
 
 //conectare la baza de date
 
 
 $conn = @mysqli_connect('localhost', 'root', '', 'petition_manager');

if (!$conn) {
    echo "Error: " . mysqli_connect_error();
	exit();
}