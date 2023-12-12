<?php 
session_start(); 

include "dbconn.php";// database connection

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['fname'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
     // data validation
	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);
	$fname = validate($_POST['fname']);

	if(empty($email)){ // checking the details with the user 
        header("Location: ../content/newpass.php?error=Email is required :(");
	    exit();
	}

	else if (empty($fname)) {
		header("Location: ../content/newpass.php?error=Full Name is required :(");
	    exit();
	}

	else if(empty($pass)){
        header("Location: ../content/newpass.php?error=Password is required :(");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM customer WHERE password='$pass' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {  // checking the condition with user enter data
			header("Location: ../content/newpass.php?error=Please enter new password  :(");
	        exit();
		}else {  //inserting data into the table 
           $sql2 = "INSERT INTO customer( email, password,fname) VALUES('$email', '$pass','$fname')";
           $output = mysqli_query($conn, $sql2); //requesting the database connection\

           if ($output) {// showing the status for the user
           	 header("Location: ../content/newpass.php?success=Your account has been created successfully :)");
	         exit();
           }else {
	           	header("Location: ../content/newpass.php?error=unknown error occurred :(");
		        exit();
           }
		}
	}
	
}else{
	header("Location: ../content/newpass.php");
	exit();
}