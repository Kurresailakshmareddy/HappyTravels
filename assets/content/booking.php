<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Happy Travels</title>
  <link rel="stylesheet" href="../stylesheets/booking.css">
  <!--external style sheet for the booking.php file-->
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
          <li><a href="../content/dashbroad.php">DASHBORAD</a></li>
          <li><a href="../content/search.php">RECENT TRIPS</a></li>
          <li><a href="../content/suggestions.php">SUGGESTIONS</a></li>
          <li><a href="../content/help.php">HELP</a></li>
          <li><a href="../content/logout.php">LOGOUT</a></li>
        </ul>
      </div>
    </div>

    <!--the main content container start here -->
    <div class="booking">
      <div class="bookinginfo">
        <h2>Book Here</h2>
        <h4>Please feel free to fill the form to book your place :)</h4>
      </div>

      <div class="booking-main">
        <div class="form">
          <!--the form container start here-->
          <form action="../content/booking-check.php" method="post">

            <?php if (isset($_GET['error'])) { ?>  <!--Showing user status -->
            <p class="error">
              <?php echo $_GET['error']; ?>
            </p>
            <?php } ?>
 
            <?php if (isset($_GET['success'])) { ?>
            <p class="success">
              <?php echo $_GET['success']; ?>
            </p>
            <?php } ?>

            <label for="fname">Full Name</label>
            <input type="text" id="fname" name="fname" title="only alphabets and digits allowed" placeholder="Please enter your full name here..">

            <label for="lname">Email</label>
            <input type="text" id="lname" name="email" placeholder="Please enter your email here..">

            <label for="place">Places</label>

            <select id="place" name="place">
              <option value="">Select The Place</option>
              <option value="Tower Bridge">Tower Bridge</option>
              <option value="London Eye">London Eye</option>
              <option value="Tower of London">Tower of London</option>
              <option value="Westminster Abbey">Westminster Abbey</option>
              <option value="Buckingham Palace">Buckingham Palace</option>
              <option value="Windsor castle">Windsor Castle</option>
              <option value="Sea Life London">Sea Life London</option>
              <option value="Warner Bros Studio">Warner Bros Studio</option>
              <option value="London's Big Ben">London's Big Ben</option>
            </select>

            <label for="Sdate">Start Date</label>
            <input type="date" id="Sdate" name="startdate">

            <label for="Sdate">End Date</label>
            <input type="date" id="Edate" name="endDate">

            <label for="guets">Number of Guets</label>

            <select id="guest" name="guest">
              <option value="">No. of Guest</option>
              <option value="One">One</option>
              <option value="Two">Two</option>
              <option value="Three">Three</option>
              <option value="Four">Four</option>
            </select>

            <button type="submit" onclick="location.href='../content/booking.php'"class="submitbtn">Submit</button>
            <button type="button" onclick="location.href='../content/search.php'"class="recentbookingbtn">Recent Booking</button>
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
            <li><a href="../content/dashbroad.php">Dashborad</a></li>
            <li><a href="../content/profile.php">Profile</a></li>
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