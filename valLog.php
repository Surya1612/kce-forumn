<?php 
session_start(); 
include "sqldb.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $mail = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
      error_reporting(E_WARNING);
        exit();
    }else if(empty($pass)){
        error_reporting(E_WARNING);
        exit();
    }else{
        $sql = "SELECT * FROM user WHERE email='$mail' AND password='$pass'";
         
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $mail && $row['password'] == $pass) {
                header("Location: index.php");
                exit();
            }else{
                 error_reporting(E_WARNING);
                exit();
            }
        }else{
             error_reporting(E_WARNING);
            exit();
        }
    }
    
}else{
   error_reporting(E_WARNING);
    exit();
}