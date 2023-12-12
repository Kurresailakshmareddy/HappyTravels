<?php 
session_start(); 

include "dbconn.php"; //database connention 

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
    // data validating 
	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($email)) { // checking the details with the user 
		header("Location: ../content/index.php?error=Email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: ../content/index.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);
		
		$sql = "SELECT * FROM customer WHERE email='$email' AND password='$pass'";

		$result = mysqli_query($conn, $sql);// requesting the datase connetion
                                                   
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);                           //checking the data in the from the table
            if ($row['email'] === $email && $row['password'] === $pass) {
            	$_SESSION['message'] = $row['message'];
				$_SESSION['email'] = $row['email'];
            	$_SESSION['fname'] = $row['fname'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: dashbroad.php");
		        exit();
            }else{   //showing the status 
				header("Location: ../content/index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: ../content/index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: ../content/index.php");
	exit();
}