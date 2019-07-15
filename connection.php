<?php

$connection = mysqli_connect("localhost","root","");

if(!$connection)
{
	echo "database connection failed";
}

$db = mysqli_select_db($connection,"bidya");

if(!$db)
{
	echo "<script>alert('database selection failed')</script>";
}

?>