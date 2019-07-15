<?php
session_start();
include "connection.php";

$uname = $_GET['uname'];
$pass = $_GET['pass'];

$sql = "select * from school_registration where USERNAME = '$uname'";
$result = mysqli_query($connection, $sql);
if(!$result)
		echo "database query failed";

$count = 0;
while($row = mysqli_fetch_array($result))
{
	if($pass == $row['PASSWORD'])
	{
		$_SESSION['xyz'] = $uname;
		header('location:secured_page.php');
	}
	else
		header('location:login.php?x=1');
	
	$count = 1;
}

if ($count == 0)
{
		header('location:login.php?x=2');
}

?>