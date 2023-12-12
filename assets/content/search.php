<?php

include 'dbconn.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Happy Travels</title>
  <link rel="stylesheet" href="../stylesheets/search.css">
  <!--external style sheet for the search.php file-->
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
    <div class="statuscheck">
      <div class="statuscheckinfo">
        <h2>Recent Bookings</h2>
        <h4>Now you can check your recent bookings with your name or email :)</h4>
      </div>

      <div class="statuscheck-main">
        <form method="post">
          <input type="text" name="search" placeholder="Type Here ..">
          <button class= searchbtn name="submit">Search</button>
        </form> 
      </div>
         

        <div class="status-main">
          <table class="table">
                <?php
                if(isset($_POST['submit'])){
                    $search=$_POST['search'];

                    $sql = "SELECT * FROM customerbooking WHERE email='$search' OR
                    fname='$search' ";
                    $result = mysqli_query($conn, $sql);

                    if($result){
                        if(mysqli_num_rows($result)>0){
                            echo '<thead>
                            <tr>
                            <th>BOOKING NUMBER<tn>
                            <th>E_Mail</th>
                            <th>NAME</th>
                            <th>PLACE</th>
                            <th>START DATE</th>
                            <th>END DATE</th>
                            <th>GUEST</th>
                            </tr>
                            </thead>';

                            while($row=mysqli_fetch_assoc($result)){ // displaying the user booking data 
                            echo '<tbody>
                            <tr>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['email'].'</td>
                            <td>'.$row['fname'].'</td>
                            <td>'.$row['place'].'</td>
                            <td>'.$row['startdate'].'</td>
                            <td>'.$row['endDate'].'</td>
                            <td>'.$row['guest'].'</td>
                            </tr>
                            </tbody>';
                            }
                            
                        }else{
                            echo '<h2 class=error> Data not found</h2>';
                        }
                    }
                }
                ?>
          </table>
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
            <li><a href="../content/booking.php">Bookings</a></li>
            <li><a href="../content/profile.php">Profile</a></li>
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