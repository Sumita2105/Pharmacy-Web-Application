    <?php 
        session_start();
        if(isset($_POST['login']))
		{		
        include('connection.php');  
        $email = $_POST['email1'];  
        $pwd = $_POST['pass'];  
		$h = password_hash($pwd, PASSWORD_DEFAULT);
		
          
            //to prevent from mysqli injection  
			
			$email1 = stripcslashes($email);  
            $password = stripcslashes($pwd);  
            $email1 = mysqli_real_escape_string($con, $email);  
            $password = mysqli_real_escape_string($con, $pwd);  
          
            $sql = "select * from registration where email = '$email1'";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
			
              
            if($count == 1){  
			     $query2 = "SELECT password from registration where email ='$email1'";
                 $result2 = mysqli_query($con, $query2);
				 $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
				 $pass=$row2['password'];
				
				
					   
				 
				 if(password_verify($password, $pass))
				 {
					 	echo ("<script LANGUAGE='JavaScript'>                     
                       window.location.href='Home.php';					   					   
					   window.alert('Login Sucessful!!');
                       </script>");
					   $_SESSION['user']= $email;
					   
					   
					   
					  echo ("<script LANGUAGE='JavaScript'>                     
                       		<script type='text/javascript'>
                           document.getElementById('logout').style.visibility = 'visible';
                          </script>	
                       </script>");

					  
				 }
                 else{  
			       echo ("<script LANGUAGE='JavaScript'>                    
                       window.location.href='login.php';
					   window.alert('Login Unsucessful!! Please try again');
                       </script>");
			
                     }				 
            }  
              
		}
    ?>  
