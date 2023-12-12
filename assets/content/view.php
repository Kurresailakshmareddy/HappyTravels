<?php 
include "dbconn.php"; // database connection
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../stylesheets/view.css" />
<!--external style sheet for the view.php file-->
	<title>Happy Travels </title>
</head>
<body>
     <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) { // verifing  the photo upload by the user 
          	while ($images = mysqli_fetch_assoc($res)) {  ?> 
             
             <div class="photo">
             	<img src="uploads/<?=$images['image_url']?>">
             </div>	
    <?php } }?><br>

	<a href="../content/profile.php">BACK</a><br>
	<br><p>[Your photo is upload successfuly]</p> 
	
</body>
</html>