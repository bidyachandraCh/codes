<?php
session_start();

if(isset($_SESSION['xyz']))
{
	header('location:secured_page.php');
}


if(isset($_GET['x']))
{
	$xx = $_GET['x'];
	
	if($xx == 1)
		echo "<script> alert('Login failed , Wrong Password!!!')</script>";
	
	if($xx == 2)
		echo "<script> alert('You are not registered you fool!!!')</script>";
	
	if($xx == 3)
		echo "<script> alert('You are Successfully signed Out!!!')</script>";
	if($xx == 4)
		echo "<script> alert('You are Successfully Registered!!!')</script>";
}

?>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div style = "width: 300px">
<form action="logincheck2.php">
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" id="username" name = "uname">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name = "pass">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">log in</button>
</form>
<a href = 'registrationpage.php'>Register</a>
</div>
</html>