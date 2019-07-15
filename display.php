<?php

include "connection.php";

$sql= "select * from student";
$result = mysqli_query($connection,$sql);

if(!$result)
{
	echo "database query failed";
}
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

<table class = 'table table-striped table-hover'>
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>password</th>
		<th>dob</th>
		<th>gender</th>
		<th>category</th>
	</tr>

<?php
while($row = mysqli_fetch_array($result))
{
//echo $row['id']."&nbsp".$row['name']."&nbsp".$row['password']."&nbsp".$row['dob']."<br>";
?>

<tr> 
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['password'];?></td>
	<td><?php echo $row['dob'];?></td>
	<td><?php echo $row['gender'];?></td>
	<td><?php echo $row['category'];?></td>
</tr>
<?php

}

?>

</table>