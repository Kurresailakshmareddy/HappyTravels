<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Travels</title>
    <link rel="stylesheet" href="../stylesheets/style.css">
    <!--external style sheet for the index.php file-->
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
                <input class="srch" type="search" name="content" placeholder="Type To Text">
                <button type="button" onclick="location.href='#home'">Search</button>
            </div>
        </div>

        <!--the main content container start here -->
        <div class="content-main">
            <div class="content">
                <!--the sub container of main container -->
                <h1>Welcome To <br><span>Happy</span> <br>Travels</h1><br>
                <p class="par">"Greetings from HappyTravels, the official guide to England's fascinating capital,<br>
                    can assist you in exploring the best of London.London activities ranging from iconic sightseeing<br>
                    spots and fun-filled days out to top restaurants,theatre, and unmissable London events.<br>
                    If you can't visit right now, plan ahead to make the most of your next opportunity.....!".
                </p>

                <button type="button" onclick="location.href='../content/signup.php'">JOIN US</button>

                <div class="form">
                    <!--the form container start here-->
                    <h2>Login Here</h2>
                       
                    <?php if (isset($_GET['error'])) { ?>
     		        <p class="error"><?php echo $_GET['error']; ?></p>
     	            <?php } ?>

                    <form action="../content/index-check.php" method="post">
                        <input type="email" name="email" title="only alphabets and digits allowed" placeholder="Enter Your Email Here">
                        <input type="password" name="password"title="only alphabets and digits allowed" placeholder="Enter Your Password Here">
                        <button type="submit" onclick="location.href='../content/index.php'"class="loginbtn">Login</button>
                    </form>

                    <p class="link">Don't have an account<br>
                        <a href="../content/signup.php">Sign up</a> Here<br><br>
                        <a href="../content/newpass.php">Forgotten Password ?</a>
                    </p>
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

    </div>
</body>

</html>