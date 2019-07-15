<?php

include "connection.php";

$name = $_GET['uname'];
$password = $_GET['pwd'];
$dob = $_GET['dob'];
$gender = $_GET['gen'];
$cat = $_GET['category'];

$sql = "INSERT INTO `student` (`id`, `name`, `password`, `dob`, `gender`, `category`) 
VALUES (NULL, '$name', '$password', '$dob', '$gender', '$cat')";

$result = mysqli_query($connection,$sql);

if(!$result)
{
	echo "database entry failed";
}
else
{
	header('location:form1.php?x=1');
}


?>