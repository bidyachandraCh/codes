<?php

	$uname = $_GET['uname'];
	$pass = $_GET['pass'];
	
	include "connection.php";
	
	$sql = "select * from registration where user_name = '$uname' and password = '$pass'";
	$result = mysqli_query($connection,$sql);
	
	if(!$result)
		echo "database query failed";
	else
		echo "database query successful";
	
	$num = mysqli_num_rows($result);
	
	if($num == 1)
		header('location:secured_page.php');
	else
		header('location:login.html');
		

?>