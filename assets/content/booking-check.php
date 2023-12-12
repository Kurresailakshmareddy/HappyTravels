<?php 
session_start(); 

include "dbconn.php"; // database connetion

if (isset($_POST['email']) && isset($_POST['fname']) && isset($_POST['place']) 
    && isset($_POST['startdate'])  && isset($_POST['endDate']) && isset($_POST['guest'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
      //data validation
	$email = validate($_POST['email']);
    $fname = validate($_POST['fname']);
	$place = validate($_POST['place']);
    $startdate = validate($_POST['startdate']);
    $endDate = validate($_POST['endDate']);
    $guest = validate($_POST['guest']);
	

    if(empty($fname) || empty($guest) ){  //checking the details with the user 
        header("Location: ../content/booking.php?error=Please fill the details");
	}else{ //inserrting data to table 
        $sql = "INSERT INTO customerbooking (email, fname, place, startdate, endDate, guest )VALUES('$email', '$fname','$place','$startdate', '$endDate','$guest')";
		$res = mysqli_query($conn, $sql);// requesting  the database connection

        if ($res) { // showing the status 
           	header("Location: ../content/booking.php?success=Your Booking has been successfully :)");
        }else {
	        header("Location: ../content/booking.php?error=unknown error occurred");
        }
	}
	
}else{
	header("Location: ../content/booking.php");
	exit();
}