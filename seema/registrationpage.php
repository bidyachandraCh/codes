<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
crossorigin="anonymous">

<form action='registration.php' method='get'>
	<fieldset action='registration.php' method='get'>
		<h3 align='center'>REGISTRATION</h3>
		NAME:<input type='text' name='name'><br>
		ADDRESS:<input type="text"name='address'><br>
		COURSE:<select name='course'>
					<option>BCA</option>
					<option>DCA</option>
					<option>MCA</option>
				</select><br>
		HOUSE:	<input type='radio' name='house' value='GREEN'>GREEN
				<input type='radio' name='house' value='RED'>RED
				<input type='radio' name='house' value='YELLOW'>YELLOW
				<input type='radio' name='house' value='BLUE'>BLUE<br>
				
		USERNAME:
			<input type = 'text' name = 'username'><br>
			
		PASSWORD:
			<input type = 'password' name = 'pwd1' id = 'pwd1'><br>
		RETYPE PASSWORD:
			<input type = 'password' name = 'pwd2' id = 'pwd2'><br>
			<div class = 'btn btn-danger' onclick = 'check1()'>Check</div>
			<input class = 'btn btn-success' type="submit"value="SUBMIT" disabled id = 'sbt' onclick = 'alert1()'>
			
	</fieldset>
</form>

<script>

	function check1()
	{
		var p1 = document.getElementById('pwd1').value;
		var p2 = document.getElementById('pwd2').value;
		
		if(p1 == p2)
		{
			alert('password ok You can now submit');
			document.getElementById('sbt').disabled = false;
		}
		else
		{
			alert('passwords are not same!!!');
		}
	}
	
	
</script>
</html>