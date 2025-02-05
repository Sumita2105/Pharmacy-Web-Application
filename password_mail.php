<?php

function sendOTP($email, $otp)
{
	
	require('C:\xampp\composer\vendor\autoload.php');
	require('C:\xampp\PHPMailer\src\Exception.php');
	require('C:\xampp\PHPMailer\src\SMTP.php');
	include('PHPMailer.php');
    
    $mail = new PHPMailer\PHPMailer\PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "yadavsumita0512@gmail.com";
    $mail->Password = "A376398@sum";
    $mail->SetFrom("yadav.sumita.19bit057@gmail.com","Sumita Yadav");
    $mail->Subject = "MediPlus Team";
    $mail->Body = "Your One-Time Password is ". $otp;
    $mail->AddAddress($email);
	$result=$mail->Send();

 if(!$result) {
    echo "";
    } 
 else {
      $otp_sent="
	    <div class=\"alert alert-success\" role=\"alert\">
        <center><span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Error:</span>
         Mail Sent to Regsitered Email id</center>
        </div>";
  echo $otp_sent;
	return $result;
 }

}



?>





















