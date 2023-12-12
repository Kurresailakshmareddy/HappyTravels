<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Happy Travels</title>
  <link rel="stylesheet" href="../stylesheets/contactus.css">
  <!--external style sheet for the contactus.php file-->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <!--external online style link for the font styling-->
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

      <div class="menu">
                <!--the main navbar list start here-->
                <ul>
                    <li><a href="../content/index.php">HOME</a></li>
                    <li><a href="../content/About.html">ABOUT</a></li>
                    <li><a href="../content/service.php">SERVICE</a></li>
                    <li><a href="../content/contactUs.php">CONTACTUS</a></li>
                </ul>
            </div>

      <div class="search">
        <input class="srch" type="search" name="search" placeholder="Type To Text">
        <button type="button" onclick="location.href='#home'">Search</button>
      </div>
    </div>

    <!--the main content container start here -->
    <div class="contact">
      <div class="contactinfo">
        <h2>Contact Us</h2>
        <h4>For Any Suggestions Or Feedback You Can Message Here :)</h4>
      </div>

      <div class="contact-main">
        <div class="form"> <!--the form container start here-->
          <form action="../content/contact-check.php" method="post">
           
          <?php if (isset($_GET['error'])) { ?>       <!--showing status to user -->
     		   <p class="error"><?php echo $_GET['error']; ?></p>
     	     <?php } ?>

           <?php if (isset($_GET['success'])) { ?>
           <p class="success"><?php echo $_GET['success']; ?></p>
           <?php } ?>

            <label for="fname">Full Name</label>
            <input type="text" id="fname" name="fname" pattern="[A-Za-z0-9]{5,23}" title="only alphabets and digits allowed min: 5, max:23" placeholder=" Please enter your full name here..">
            
            <label for="email">E-mail</label>
            <input type="text" id="email" name="email" title="only alphabets and digits allowed" placeholder="Please enter your email here..">

            <label for="subject">Suggetion/FeedBack</label>
            <textarea id="subject" name="message"  pattern="[A-Za-z0-9]{1,125}" title="only alphabets and digits allowed max: 125"  placeholder="Please type here.." style="height:100px"></textarea>
            
            <input type="submit" value="Submit">
          </form>
        </div>
      </div>

      <div class="contactaddress">
        <div class="contact-text">
          <div class="addtext">
            <h2>Address</h2>
            <h3>
              12 abcd London<br>
              LE13 6FG
            </h3>
            <h2>Contact Number</h2>
            <h3>+44-12345678</h3>
            <h2>E-Mail ID</h2>
            <h3>abcdefg@gmail.com</h3>
          </div>
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
          <h4>Documents </h4>
            <ul>
              <li><a href="../content/HappyTravels_part-A.pdf">Peer Review </a></li>
              <li><a href="../content/SecurityReport_part-B.pdf">Security Report</a></li>
              <li><a href="../content/credits.html">Credits</a></li>
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