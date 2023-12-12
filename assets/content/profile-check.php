<?php 

include "dbconn.php"; //database connection

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) { //checking with the uploading photo properties 
		if ($img_size > 125000) {
		    header("Location: ../content/profile.php?error=Sorry, your file is too large :(");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = '../content/uploads/'.$new_img_name; //path for the saving proflie photo
				move_uploaded_file($tmp_name, $img_upload_path);

				// Inserting  into the  Database
				$sql = "INSERT INTO images(image_url) VALUES('$new_img_name')"; mysqli_query($conn, $sql);
				header("Location: ../content/view.php");
			}else {
		        header("Location: ../content/profile.php?error=You can't upload this type of file :(");
			}
		}
	}else {
		header("Location: ../content/profile.php?error=Please choose the picture :(");
	}

}else {
	header("Location: ../content/profile.php");
}