<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Happy Travels</title>
  <link rel="stylesheet" href="../stylesheets/suggestions.css">
  <!--external style sheet for the suggestion.php file-->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <!--external online style link for the icon styling-->
</head>

<body>
  <!--The main header Starter here-->
  <div class="main">
    <div class="navbar">
      <div class="icon">
          <h2 class="logo">HappyTravels</h2>
      </div>

      <div class="menu">
            <!--the main navbar list start here-->
            <ul>
              <li><a href="../content/dashbroad.php">DASHBOARD</a></li>
              <li><a href="../content/profile.php">PROFILE</a></li>
              <li><a href="../content/packages.php">BOOKINGS</a></li>
              <li><a href="../content/help.php">HELP</a></li>
              <li><a href="../content/logout.php">LOGOUT</a></li><li>
            </ul>
        </div>
    </div>

    <!--the main content container start here -->
    <div class="suggestions">
      <div class="suggestionsinfo">
        <h2>Suggestions</h2>
        <h4>Please feel free to share your suggestions :)</h4>
      </div>

      <div class="suggestions-main">
        <div class="form"> <!--the form container start here-->
          <form action="../content/suggestions-check.php" method="post">
           
          <?php if (isset($_GET['error'])) { ?>
     		   <p class="error"><?php echo $_GET['error']; ?></p>  
     	     <?php } ?>                                            <!--showing the status to the user -->

           <?php if (isset($_GET['success'])) { ?>
           <p class="success"><?php echo $_GET['success']; ?></p>
           <?php } ?>

            <label for="fname">Full Name</label>
            <input type="text" id="fname" name="fname"  pattern="[A-Za-z0-9]{5,23}" title="only alphabets and digits allowed min: 5, max:23" placeholder=" Please enter your full name here..">
            
            <label for="email">E-mail</label>
            <input type="text" id="email" name="email" title="only alphabets and digits allowed" placeholder="Please enter your email here..">

            <label for="subject">Suggetion</label>
            <textarea id="subject" name="message"  pattern="[A-Za-z0-9]{1,125}" title="only alphabets and digits allowed max: 125" placeholder="Please Type Here.." style="height:100px"></textarea>
            
            <input type="submit" value="Submit">
          </form>
        </div>
      </div>
    </div>
  </div>

  <!--the mian footer container starts here-->
  <footer class="footer">
    <div class="footer-main">
      <!--the sub container of the footer contain three section-->
      <div class="row">
        <div class="footer-col">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="../content/dashbroad.php">Dashboard</a></li>
            <li><a href="../content/search.php">Recent Bookings</a></li>
            <li><a href="../content/packages.php">Packages</a></li>
            <li><a href="../content/help.php">Help</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Contact Address</h4><br>
          <h3>+44-123456789</h3><br>
          <h3>abcdefg@gmail.com</h3>
        </div>
        <div class="footer-col">
          <h4>Wire Frames</h4>
          <ul>
            <li><a href="../img/home.jpg">Home</a></li>
            <li><a href="../img/About.jpg">About</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Follow Us</h4>
          <div class="social-links">
            <a href="#home"><i class="fab fa-facebook-f"></i></a>
            <a href="#home"><i class="fab fa-twitter"></i></a>
            <a href="#home"><i class="fab fa-instagram"></i></a>
            <a href="#home"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
</body>
</html>