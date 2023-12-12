<?php 
session_start(); 

include "dbconn.php"; //database connection

if (isset($_POST['email']) && isset($_POST['password'])
    && isset($_POST['fname']) && isset($_POST['re-password'] ) && isset($_POST['message'] )) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
    // data validation
	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);
	$re_pass = validate($_POST['re-password']);
	$fname = validate($_POST['fname']);
	$message = validate($_POST['message']);

	$user_data = 'email='. $email. '&fname='. $fname;


	if (empty($fname)) {  //checking the data with user details 
		header("Location: ../content/signup.php?error=Full Name is required :(&$user_data");
	    exit();
	}

	else if(empty($email)){
        header("Location: ../content/signup.php?error=Email is required :(&$user_data");
	    exit();
	}
    
    else if(empty($pass)){
        header("Location: ../content/signup.php?error=Password is required :(&$user_data");
	    exit();
	}

	else if(empty($re_pass)){
        header("Location: ../content/signup.php?error=Re-Password is required :(&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: ../content/signup.php?error=The confirmation password does not match :(&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM customer WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);//requesting the database connection

		if (mysqli_num_rows($result) > 0) {
			header("Location: ../content/signup.php?error=The username is taken try another :(&$user_data");
	        exit();
		}else {
			//inserting data into the table
           $sql2 = "INSERT INTO customer( email, password, fname, message) VALUES('$email', '$pass', '$fname','$message' )";
           $output = mysqli_query($conn, $sql2);//requesting the database connection


           if ($output) {// showing the status to the user
           	 header("Location: ../content/signup.php?success=Your account has been created successfully :)");
	         exit();
           }else {
	           	header("Location: ../content/signup.php?error=unknown error occurred :(&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: ../content/signup.php");
	exit();
}