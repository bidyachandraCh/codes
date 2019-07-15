<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
<link rel ="stylesheet" href="mystyle.css">

<div class='para'>
	<form action='registration_upload.php' method='post' enctype="multipart/form-data">
		<h3>REGISTRATION</h3>
		NAME :	<input type='text' name='name'><br>
		ADDRESS :	<input type="text"name='address'><br>
		COURSE :	<select name='course'>
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
		<br>
		Select image to upload:<br>
			<input type="file" name="fileToUpload" id="fileToUpload">
			<div class = 'btn btn-danger' onclick = 'check1()'>Check</div>
			<input class = 'btn btn-success' type="submit" value="SUBMIT" disabled id = 'sbt' onclick = 'alert1()'>		
	</form>
</div>
<br>
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

<?php
	include "connection.php";
	$sql= "select * from biodata";
	$result = mysqli_query($connection,$sql);

	if(!$result)
	{
		echo "database query failed";
	}
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

<table class = 'table table-striped table-hover table-bordered'>
	<tr>
		<th>ID: </th>
		<th>Name: </th>
		<th>Address: </th>
		<th>House: </th>
		<th>Course: </th>
		<th>Username: </th>
		<th>Password: </th>
		<th>Image: </th>
	</tr>

<?php
while($row = mysqli_fetch_array($result))
{
//echo $row['id']."&nbsp".$row['name']."&nbsp".$row['password']."&nbsp".$row['dob']."<br>";
?>

<tr> 
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['NAME'];?></td>
	<td><?php echo $row['ADDRESS'];?></td>
	<td><?php echo $row['HOUSE'];?></td>
	<td><?php echo $row['COURSE'];?></td>
	<td><?php echo $row['USERNAME'];?></td>
	<td><?php echo $row['PASSWORD'];?></td>
	<td><img src = 'uploads/<?php echo $row['IMAGE_NAME'];?>' height = '300px' width = '300px'></td>
	
</tr>
<?php

	}
?>
</table>
</html>