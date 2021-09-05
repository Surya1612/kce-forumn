<?php 
     include "sqldb.php";
    if(isset($_POST['submit']))
    {
       $UserName = $_POST['name'];
       $Email = $_POST['email'];
       $Subject = $_POST['subject'];
       $Msg = $_POST['msg'];


       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:contact.php?error');
       }
       else
       {
       	  $sql = " INSERT INTO `contact`(`name`, `email`, `subject`, `message`) VALUES ('$UserName','$Email','$Subject','$Msg')";
		  $result = mysqli_query($conn, $sql);
             if ($result) {
           	 header("location:contact.php?success");
	         exit();
           }else {
	           	header("Location: contact.php?error");
		        exit();
           }
       }
    }
    else
    {
        header("location:contact.php");
    }
?>