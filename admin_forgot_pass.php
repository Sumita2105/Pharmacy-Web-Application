<head>
 <script type="text/javascript" src="Validation.js"></script>

</head>

<?php
session_start();
include('connection.php');
include('password_mail.php');


date_default_timezone_set("Asia/Kolkata");
$success="";
$error_message="";
$email1="";

if(!empty($_POST['submit_email']))

{
	
	$email1=$_POST['email'];
	
	$result=mysqli_query($con, "SELECT * from admin_login where email='". $_POST['email']. "'");
	$count= mysqli_num_rows($result);
	if($count>0)
	{
		
		//generate OTP
		$otp=rand(100000,999999);
		$_SESSION['admin_mail']= $email1;
		echo $_SESSION['admin_mail'];
		
		//send OTP
		$mail_status= sendOTP($_POST['email'], $otp);
		
		if($mail_status==1)
		{
			$result=mysqli_query($con, "INSERT INTO otp_expiry(otp,is_expired,create_at) VALUES ('". $otp . "',0,'".
			date("Y-m-d H:i:s")."')");
			
			$current_id=mysqli_insert_id($con);
			
			if(!empty($current_id))
			{
				$success=1;
			}
		}
	}
	else
	{
		$error_message="Email not exists!";
		echo $error_message;
	}
}

if(!empty($_POST["submit_otp"]))
{
	$result=mysqli_query($con, "SELECT *FROM otp_expiry WHERE otp='" . $_POST['otp']."'
	AND is_expired!=1 AND NOW() <= DATE_ADD(create_at,INTERVAL 15 MINUTE)");
	$count=mysqli_num_rows($result);
	if(!empty($count))
	{
		$result= mysqli_query($con, "UPDATE otp_expiry SET is_expired=1 WHERE otp=
		'". $_POST['otp']."'");
		
		$success=2;
		
	    }
		else{
		$success=1;
		$error_message="
	    <div class=\"alert alert-danger\" role=\"alert\">
        <center><span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Error:</span>
         Invalid OTP</center>
</div>";
  echo $error_message;

	}
}

if(!empty($_POST['reset']))
{           
           
           if(isset($_SESSION['admin_mail']))
		   {
	        $pwd=$_POST['confirm'];
            $h = password_hash($pwd, PASSWORD_DEFAULT);
            $sql = "select * from admin_login where email='" . $_SESSION['admin_mail']."' ";
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
			echo $count;
			
			
              
            if($count == 1){  
			     $query2 = "UPDATE admin_login set password='$h' WHERE email='" . $_SESSION['admin_mail']."' ";
                 $result2 = mysqli_query($con, $query2);
				 
		
	           echo 
                ("<script LANGUAGE='JavaScript'>                     
              window.location.href='admin_login.php';					   					   
		      window.alert('Password Changed Sucessfully!!');
               </script>");
		
			}
			
			else{
				echo "No update";
			}
		   }
}

?>
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <script type="text/javascript" src="Validation.js"></script>
 <!--Font Awesome-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">



<link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />

<style>
body {
  background-image: url('./images/medical_backgroun.jpg');
   background-size: 1700px 1100px;

}
</style>
</head>
<body>
<form action="" method="post">
 <div class="form-gap" style="padding-top:40px;"></div>
<div class="container">
	<div class="row">
	<?php
	if(!empty($success==1)) {
	?>
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Enter OTP</h2>
                  <p>OTP is sent to your registered email id.<br> OTP will expire in 15 minutes</p>
                  <div class="panel-body">
    
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="otp" placeholder="OTP" class="form-control"  type="text" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="submit_otp" class="btn btn-lg btn-primary btn-block" value="Submit" type="submit">
                      </div>
                      
					
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
					  </form>
                    
    
                  </div>
                </div>
              </div>
            </div>
          </div>
		    <?php
	}                   else if($success==2){
		               
					  ?>

           <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Reset Password</h2>
                  
                  <div class="panel-body">
    
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fas fa-key color-blue"></i></span>
                          <input id="pass1" name="new" placeholder="New Password" class="form-control"  type="password"  pattern="^(?=.{10,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$" title="Password should have atleast 8 character and must contain one Capital letter, one small letter, one number and one special character" required>
                        </div><br>
						<div class="input-group">
                          <span class="input-group-addon"><i class="fas fa-key color-blue"></i></span>
                          <input id="pass2" name="confirm" placeholder="Confirm Password" class="form-control"  type="password" required>
						 
                        </div>
                      </div>
                      <div class="form-group">
					    
                        <input name="reset" class="btn btn-lg btn-primary btn-block" value="Reset" type="submit">
                      </div>
                      
					    
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
					  
                   
    
                  </div>
                </div>
              </div>
            </div>
          </div>
		  
					  
					  
					  <?php
	}                  else{
					  ?>
			<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>Enter your registered email id</p>
                  <div class="panel-body">
    
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="email" placeholder="email address" class="form-control"  type="email" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="submit_email" class="btn btn-lg btn-primary btn-block" value="Send OTP" type="submit">
                      </div>
                      
					
                      <input type="hidden" class="hide" name="token" id="token" value=""> 

                   
    
                  </div>
                </div>
              </div>
            </div>
          </div>
		  <?php
	}
	?>
	</div>
</div>
</form>
</body>