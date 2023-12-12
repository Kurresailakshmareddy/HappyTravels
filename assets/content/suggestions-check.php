<?php 
session_start(); 

include "dbconn.php"; // database connection

if (isset($_POST['email']) && isset($_POST['fname']) && isset($_POST['message'] ) ) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
    //data validation
	$email = validate($_POST['email']);
    $fname = validate($_POST['fname']);
	$message = validate($_POST['message']);
	

    if(empty($message) || empty($fname) ){ //checking the data with the user details
        header("Location: ../content/suggestions.php?error=Please fill the details");
	}else{
		// inserting data into the table
        $sql = "INSERT INTO customercontact (email,fname,message) VALUES('$email', '$fname','$message')";
		$res = mysqli_query($conn, $sql);

        if ($res) { //showing the status to the user 
           	header("Location: ../content/suggestions.php?success=Your message has been sent successfully :)");
        }else {
	        header("Location: ../content/suggestions.php?error=unknown error occurred");
        }
	}
	
}else{
	header("Location: ../content/suggestions.php");
	exit();
}


