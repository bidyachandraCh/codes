<!DOCTYPE html>

<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >


<link rel = 'stylesheet' href = 'mystyle.css'>
<div class='position1'>
<form  action = 'abc.php' method = 'get'>

<h3>Registration your ID</h3>

	Name:<br>
	<input type = 'text' name = 'uname' ><br>
	
	Password:<br>
	<input type = 'password' name = 'pwd'  id = 'pass1'><br>
	Retype Password:<br>
	<input type = 'password' name = 'pwd2'  id = 'pass2'><br>
	
	Date of Birth: <br>
	<input type = 'date' name = 'dob' ><br>
	
	Category : <br>
	<select name = 'category' required>
		<option>GENERAL</option>
		<option>OBC</option>
		<option>ST/SC</option>
	</select>
	<br>
	
	Gender: <br>
	  <input type = 'radio' value = 'female' name = 'gen'  >Female 
	  <input type = 'radio' value = 'male' name = 'gen' >Male 
	  <input type = 'radio' value = 'Others' name = 'gen' >Others
	<br>
	
	<div class = 'btn btn-danger' onclick = 'check1()'>Check</div>
	<input class = 'btn btn-success'type = 'submit' value = 'login' disabled id = 'submit1'><br>
	
</form>
<a href = 'display.php'>List of Students</a>

</div>

</html>
<?php

if(isset($_GET['x']))
{
	$a = $_GET['x'];
	if($a == 1)
	{
		echo "<script>alert('Registration Successful!!!')</script>";
	}
}
?>
<script>
	function check1()
	{
		var p1 = document.getElementById('pass1').value;
		var p2 = document.getElementById('pass2').value;
		
		if(p1 == p2)
			document.getElementById('submit1').disabled = false;
		else
			alert('passwords doesnt match');
	}
</script>
