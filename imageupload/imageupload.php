<html>


	<form action="upload.php" method="post" enctype="multipart/form-data">
		Select image to upload:
		<input type="file" name="fileToUpload" id="fileToUpload">
		<input type="submit" value="Upload Image" name="submit">
	</form>

</html>

<?php
	
	include "connection.php";
	$sql = "select * from image";
	$result = mysqli_query($connection,$sql);
	
	while($row = mysqli_fetch_array($result))
	{
	
?>
	<img src = 'uploads/<?php echo $row['image_name']?>' height = '300px' width = '300px'>
	
	<!--
	<p><?php echo "hello123" ;?></p>
	-->
<?php
    }
?>