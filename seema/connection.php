<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'seema';

$connection = mysqli_connect($host, $user,$password);

if(!$connection)
	echo "<script> alert('database connection failed')</script>";


$db = mysqli_select_db($connection,$db);

if(!$db)
	echo "<script> alert('database selection failed')</script>";

?>