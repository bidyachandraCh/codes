<?php
include "connection.php";
	echo "THIS IS REGISTRATION PAGE<br>";
		$NAME = $_GET['name'];
		$ADDRESS = $_GET['address'];
		$COURSE = $_GET['course'];
		$HOUSE = $_GET['house'];
		$USERNAME = $_GET['username'];
		$PASSWORD = $_GET['pwd1'];
		
		
	
	$sql = "INSERT INTO `school_registration` (id, NAME,ADDRESS, HOUSE, COURSE, USERNAME, PASSWORD) VALUES (NULL, '$NAME', '$ADDRESS', '$HOUSE', '$COURSE', '$USERNAME', '$PASSWORD')";
	
	$result = mysqli_query($connection,$sql);
	
	if(!$result)
	{
		echo "database entry failed";
	}
	else
	{
		header('location:login.php?x=4')
	}
?>