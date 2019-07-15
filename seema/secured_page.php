<?php
session_start();
if(!isset($_SESSION['xyz']))
{
	header('location:login.php');
}
	$user1 = $_SESSION['xyz'];

include "connection.php";

$sql = "select * from school_registration where USERNAME = '$user1'";
$result = mysqli_query($connection,$sql);
$result1 = mysqli_query($connection,$sql);

if(!$result)
		echo "database query failed";

	
	
	
?>

<a href = 'logout.php'>LOGOUT</a>
<!doctypeHTML>
<html>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="mystyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<nav class="navbar navbar-expand-sm bg-light">

	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" href="#">Welcome <?php echo $user1;?></a>
		</li>
	</nav>
	<hr>
	<div style= 'text-align:center' class = 'account'>
		<h3> Account Information </h3>
		<table class = 'table table-striped table-hover'>
			<?php
			while($row = mysqli_fetch_array($result))
			{
	
			?>
			
			
			<tr>
				<th>Name</th>
				<td><?php echo $row['NAME']; ?></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><?php echo $row['ADDRESS']; ?></td>
			</tr>
			<tr>
				<th>Course</th>
				<td><?php echo $row['COURSE']; ?></td>
			</tr>
			<tr>
				<th>House</th>
				<td><?php echo $row['HOUSE']; ?></td>
			</tr>
			<tr>
				<th>Username</th>
				<td><?php echo $row['USERNAME']; ?></td>
			</tr>
			<tr>
				<td colspan = 2> 
					<button id = 'edit1' class = 'btn btn-secondary justify-content-center '>Edit</button>
				</td>
			</tr>
			
			<?php
			
			}
			
			?>
		</table>
	</div>	
	
	
		<div style= 'text-align:center' class = 'accountedit'>
		<h3> Account Information </h3>
		<table class = 'table table-striped table-hover'>
			<?php
			while($row1 = mysqli_fetch_array($result1))
			{
	
			?>
			
			<form action = 'edit.php'>
			<tr>
				<th>Name</th>
				<td><input type = 'text' value = '<?php echo $row1['NAME']; ?>' name = 'uname'></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><input type = 'text' value = '<?php echo $row1['ADDRESS']; ?>' name = 'address'></td>
			</tr>
			<tr>
				<th>Course</th>
				<td><input type = 'text' value = '<?php echo $row1['COURSE']; ?>' name = 'course'></td>
			</tr>
			<tr>
				<th>House</th>
				<td><input type = 'text' value = '<?php echo $row1['HOUSE']; ?>' name = 'house'></td>
			</tr>
			<tr>
				<th>Username</th>
				<td><?php echo $row1['USERNAME']; ?></td>
			</tr>
			<tr>
				<td colspan = 2> 
					<input type = 'submit' value = 'Edit' class = 'btn btn-primary'>
					<div  class = 'btn btn-secondary justify-content-center ' id = 'editclose'>close</div>
				</td>
			</tr>
			
			<?php
			
			}
			
			?>
		</table>
		</form>
	</div>	

	
<script>
	$(document).ready(function(){
		
		$('#edit1').click(function(){
			$('.accountedit').animate({right:'0px'});
		});
		
		$('#editclose').click(function(){
			$('.accountedit').animate({right:'-300px'});
		});
		
	});
</script>

</html>



