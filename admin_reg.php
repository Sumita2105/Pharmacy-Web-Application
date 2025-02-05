<?php 
include('connection.php'); 
$error_message = "";$success_message = "";


// Register user
if(isset($_POST['admin']))
{
   $uname = trim($_POST['user']);
   $email = trim($_POST['email1']);
   $pwd = trim($_POST['pass']);
   $time= date("Y-m-d H:i:s");
   $h = password_hash($pwd, PASSWORD_DEFAULT);
   
   

   $isValid = true;


   if($isValid){

     // Check if Email-ID already exists
     $stmt = $con->prepare("SELECT * FROM admin_login WHERE email = ?");
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $result = $stmt->get_result();
     $stmt->close();
     if($result->num_rows > 0){
       $isValid = false;
       echo ("<script LANGUAGE='JavaScript'>                     
            window.alert('Email-id already exists!!');
			window.location.href='register.html';
            </script>");
     }
	 

   }  
   // Insert records
   if($isValid){
   
     $sql = "INSERT INTO admin_login (username, email, password, reg_time)
                                VALUES ('$uname','$email', '$h', '$time')";    
	if(mysqli_query($con, $sql))
	    {
          echo ("<script LANGUAGE='JavaScript'>                     
          window.location.href='admin_dashboard.php';					   					   
		  window.alert('Account Created Sucessfully!!');
          </script>");
		   
	

     }
    else
	{
  	   echo ("<script LANGUAGE='JavaScript'>                           					   					   
	   window.alert('Error!! Please try again later');
       </script>");
	}

   }
   
}

?>
