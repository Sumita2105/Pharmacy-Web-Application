<?php 
session_start();
include('connection.php'); 
$error_message = "";$success_message = "";


// Register user

   $uname = trim($_POST['user']);
   $email = trim($_POST['email1']);
   $pwd = trim($_POST['pass']);
   $date= date("Y-m-d");
   $h = password_hash($pwd, PASSWORD_DEFAULT);
   $t= date('h:i:s');
   

   $isValid = true;


   if($isValid){

     // Check if Email-ID already exists
     $stmt = $con->prepare("SELECT * FROM registration WHERE email = ?");
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $result = $stmt->get_result();
     $stmt->close();
     if($result->num_rows > 0){
       $isValid = false;
       echo ("<script LANGUAGE='JavaScript'>                     
            window.alert('Email-id already exists!!');
			window.location.href='registration.php';
            </script>");
     }
	 
	 //check if username exists
	 $stmt1 = $con->prepare("SELECT * FROM registration WHERE username = ?");
     $stmt1->bind_param("s", $uname);
     $stmt1->execute();
     $result1 = $stmt1->get_result();
     $stmt1->close();
     if($result1->num_rows > 0){
       $isValid = false;
       echo ("<script LANGUAGE='JavaScript'>                     
            window.alert('Username already exists!!');
			window.location.href='registration.php';
            </script>");
     }
	 

   }  
   // Insert records
   if($isValid){
   
     $sql = "INSERT INTO registration (username, email, password, reg_date, reg_time)
                                VALUES ('$uname','$email', '$h', '$date', '$t')";    
	if(mysqli_query($con, $sql))
	    {
          echo ("<script LANGUAGE='JavaScript'>                     
          window.location.href='login.php';					   					   
		  window.alert('Account Created Sucessfully!!');
          </script>");
		$_SESSION['customer'] = $email;
        $_SESSION['customerid'] = $uname;
		   
	

     }
    else
	{
  	   echo ("<script LANGUAGE='JavaScript'>                           					   					   
	   window.alert('Error!! Please try again later');
       </script>");
	}

   }

?>
