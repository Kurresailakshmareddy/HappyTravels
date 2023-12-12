<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Travels</title>
    <link rel="stylesheet" href="../stylesheets/signup.css"> <!--external style sheet for the index.html file-->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!--external online style link for the icon styling-->
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

        <!--the form container start here-->
        <div class="signup">
            <div class="signupinfo">
                <h2>Sign Up Here</h2>
                <h4>Please fill the form to create an account.. :)</h4>
            </div>

            <div class="signup-main">
                <div class="signup-form">
                    <form action="../content/signup-check.php" method="post">

                       <?php if (isset($_GET['error'])) { ?>       <!-- showing the status to user-->
     		           <p class="error"><?php echo $_GET['error']; ?></p>
     	               <?php } ?>

                       <?php if (isset($_GET['success'])) { ?>
                       <p class="success"><?php echo $_GET['success']; ?></p>
                       <?php } ?>

                        <label for="fname">Full Name</label>
                        <?php if (isset($_GET['fname'])) { ?>
                        <input type="text" id="fname" name="fname"  pattern="[A-Za-z0-9]{5,23}" title="only alphabets and digits allowed min: 5, max:23" placeholder=" Please your fullname here.."
                         value="<?php echo $_GET['fname']; ?>" >
                        <?php }else{ ?>
                        <input type="text" 
                        name="fname" 
                        pattern="[A-Za-z0-9]{5,23}" title="only alphabets and digits allowed min: 5, max:23" placeholder="Please enter your full name here..">
                        <?php }?>

                        <label for="email">E-mail</label>
                        <?php if (isset($_GET['email'])) { ?>
                        <input type="text" id="email" name="email" placeholder="Enter your email here.."
                         value="<?php echo $_GET['email']; ?>" >
                        <?php }else{ ?>
                        <input type="text" 
                        name="email" 
                        placeholder="Please Enter your email here..">
                        <?php }?>

                        <label for="subject">Bio</label>
                        <textarea id="subject" name="message" title="only alphabets and digits allowed" placeholder="Please Type Here.." style="height:30px"></textarea>

                        <label for="pwd">Password</label>
                        <input type="password" id="pwd" name="password" title="only alphabets and digits allowed " placeholder="Please enter your password here.." >

                        <label for="rpwd">Re-Enter Password</label>
                        <input type="password" id="rpwd" name="re-password"  title="only alphabets and digits allowed" placeholder="Please re-enter your password here..">

                        <label>
                            <input type="checkbox" checked="checked" name="remember">
                             By creating an account you agree to our
                            <a href="#" style="color:dodgerblue">Terms & Conditions.</a>
                        </label>

                        <div class="clearform">
                            <button type="submit" onclick="location.href='../content/index.php'" class="signupbtn">Sign Up</button>
                            <button type="button" onclick="location.href='../content/index.php'"class="loginbtn">Login</button>
                        </div>
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