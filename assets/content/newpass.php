<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Happy Travels</title>
  <link rel="stylesheet" href="../stylesheets/newpass.css">
  <!--external style sheet for the  newpass.php file-->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <!--external online style link for the icons styling-->
</head>

<body>
  <!--The main header Starter here-->
  <div class="main">
    <div class="navbar">
      <div class="icon">
        <a href="../content/index.php">
          <h2 class="logo">HappyTravels</h2>
        </a>
      </div>
    </div>

    <!--the main content container start here -->
    <div class="forgotpass">
      <div class="forgotpassinfo">
        <h2>Forgot Passsword</h2>
        <h4>Please Feel free to fill the details :)</h4>
      </div>

      <div class="forgotpass-main">
        <div class="form"> <!--the form container start here-->
          <form action="../content/newpass-check.php" method="post">
           
          <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	  <?php } ?>

           <?php if (isset($_GET['success'])) { ?>
           <p class="success"><?php echo $_GET['success']; ?></p>
           <?php } ?>

            <label for="email">E-mail</label>
            <input type="text" id="email" name="email" title="only alphabets and digits allowed" placeholder="Please enter your email here..">
            <label for="email">Full Name</label>
            <input type="text" id="fname" name="fname" title="only alphabets and digits allowed" placeholder="Please enter your full name here..">
            <label for="email">New Password</label>
            <input type ="password" name="password" title="only alphabets and digits allowed" placeholder="Enter your new password here..">
            
            <button type="submit" onclick="location.href='../content/index.php'"class="passbtn">Submit</button>
            <button type="button" onclick="location.href='../content/index.php'"class="loginbtn">Login</button>
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
            <li><a href="../content/index.php">Home</a></li>
            <li><a href="../content/About.html">About</a></li>
            <li><a href="../content/service.php">Service</a></li>
            <li><a href="../content/contactUs.php">ContactUs</a></li>
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
            <li><a href="../img/About.png">About</a></li>
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