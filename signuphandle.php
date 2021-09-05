<?php 
session_start(); 
include "sqldb.php";

if (isset($_POST['signupEmail']) && isset($_POST['signupPassword'])
    && isset($_POST['signupcPassword']) ){

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['signupEmail']);
	$pass = validate($_POST['signupPassword']);

	$re_pass = validate($_POST['signupcPassword']);
	

$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: index.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: index.php?error=Re Password is required&$user_data");
	    exit();
	}


	else if($pass !== $re_pass){
        header("Location: index.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
      $hash = password_hash($pass, PASSWORD_DEFAULT);

	    $sql = "SELECT * FROM users WHERE user_email='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: index.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 ="INSERT INTO `users` ( `user_email`, `user_pass`, `timestamp`) VALUES ( '$uname', '$hash', current_timestamp());";;
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: index.php?signupsuccess=true");
	         exit();
           }else {
	           	header("Location: index.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signModal.php");
	exit();
}
