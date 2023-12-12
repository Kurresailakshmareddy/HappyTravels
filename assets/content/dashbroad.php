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
  <link rel="stylesheet" href="../stylesheets/dashbroad.css" />
   <!--external style sheet for the dashbroad.php file-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!--external online style link for the font styling-->
</head>

<body>
  <!--The main header Starter here-->
  <section class="header">
    <header>
      <div id="brand">
        <h2>Happy Travels<hr></h2>
      </div>
    </header>

    <input type="checkbox" id="menuToggle">
    <label for="menuToggle" class="menu-icon">&#9776;</label>


    <nav class="menu">
      <h4>DASHBOARD</h4>
      <ul>
        <!--the main navbar list start here-->
        <li><a href="../content/profile.php">PROFILE</a></li>
        <li><a href="../content/packages.php">BOOKINGS</a></li>
        <li><a href="../content/search.php">RECENT BOOKINGS</a></li>
        <li><a href="../content/suggestions.php">SUGGESTIONS</a></li>
        <li><a href="../content/help.php">HELP</a></li>
        <li><a href="../content/logout.php">LOGOUT</a></li>
      </ul>
    </nav>

    <div class="content_main">  
    <!--the main content container start here -->
      <h2>Hello  <?php echo $_SESSION['fname']; ?> ..!<h2>
      <h2>Welcome to Happy Travels.. :)<h2>
         
    <!--displaying the user proflie photo -->
      <?php 
        $sql = "SELECT * FROM images";      
        $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {           
          	while ($images = mysqli_fetch_array($res)) {  ?>
             	<img class="img" src="uploads/<?=$images['image_url']?>">
      <?php } }?>
        
      <div class="content">
        <p>
            " Greetings from HappyTravels, the official guide to England's fascinating capital,<br>
            can assist you in exploring the best of London.London activities ranging from iconic sightseeing
            spots and fun-filled days out to top restaurants,theatre, and unmissable London events.
            If you can't visit right now, plan ahead to make the most of your next <br>opportunity.....! ".
        </p>
      </div>
    </div>
  </section>
</body>
</html>

<?php 
}else{
  header("Location: ../content/dashboard.php");
  exit();
}
?>