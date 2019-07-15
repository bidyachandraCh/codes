<?php
include "connection.php";
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$file_name = basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		$NAME = $_POST['name'];
		$ADDRESS = $_POST['address'];
		$COURSE = $_POST['course'];
		$HOUSE = $_POST['house'];
		$USERNAME = $_POST['username'];
		$PASSWORD = $_POST['pwd1'];


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		$sql = "INSERT INTO `biodata` (`id`, `NAME`, `ADDRESS`, `HOUSE`, `COURSE`, `USERNAME`, `PASSWORD`, `IMAGE_NAME`) VALUES (NULL, '$NAME', '$ADDRESS', '$HOUSE', '$COURSE', '$USERNAME', '$PASSWORD', '$file_name')";
	
		$result = mysqli_query($connection,$sql);
		if(!$result)
			echo "<br>database entry failed";
		else
			header('location:registrationpage.php');
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>