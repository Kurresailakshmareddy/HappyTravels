<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

include "dbconn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>HappyTravels</title>
  <link rel="stylesheet" href="../stylesheets/profile.css" />
   <!--external style sheet for service.php file-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!--external online style link for the icons styling-->
</head>

<body>
  <!--The main header Starter here-->
  <section class="header">
    <header>
      <div id="brand">
        <h2>Happy Travels<hr></h2>
      </div>
    </header>

    <input type="checkbox" id="menuToggle">   <!--for sidebar navigation-->
    <label for="menuToggle" class="menu-icon">&#9776;</label>


    <nav class="menu">
      <!--the main navbar list start here-->
      <ul>
        <li><a href="../content/dashbroad.php">DASHBOARD</a></li>
        <li><a href="../content/profile.php">PROFILE</a></li>
        <li><a href="../content/packages.php">BOOKINGS</a></li>
        <li><a href="../content/search.php">RECENT TRIPS</a></li>
        <li><a href="../content/suggestions.php">SUGGESTIONS</a></li>
        <li><a href="../content/help.php">HELP</a></li>
        <li><a href="../content/logout.php">LOGOUT</a></li>
      </ul>
    </nav>

    <div class="content_main"> <!--displaying the user details-->
      <h1>PROFILE</h1>
      <h2>Name: <?php echo $_SESSION['fname']; ?> <h2>
      <h2>Email: <?php echo $_SESSION['email']; ?><h2>
      <h2>Bio: <?php echo $_SESSION['message']; ?><h2>
      <h2>Upload Your Photo* :<h2>

      <form action="../content/profile-check.php" method="post" enctype="multipart/form-data">

       <?php if (isset($_GET['error'])) { ?>
     	 <p class="error"><?php echo $_GET['error']; ?></p>
     	 <?php } ?>

       <?php if (isset($_GET['success'])) { ?>
       <p class="success"><?php echo $_GET['success']; ?></p>
       <?php } ?>

       <input type="file"  id = file name="my_image">
       <input type="submit" name="submit" value="Upload">

      </form>

      <h5>*Please upload your photo once</h5>
      <!--displaying the user details-->

      <?php 
          $sql = "SELECT * FROM images" ;     
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_array($res)) {  ?>
             	<img class="img" src="uploads/<?=$images['image_url']?>">
      <?php } }?>

    <div>
  </section>
</body>
</html>

<?php 
}else{
  header("Location: ../content/profile.php");
  exit();
}
?>