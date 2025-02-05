<!DOCTYPE html>
<html>
<head>
<?php
include('header.php');
include('demo1.php');
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>admin_product</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="admin_dashboard.css" media="screen">
<link rel="stylesheet" href="daily_registration.css" media="screen">

    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.21.3, nicepage.com">
    
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"sameAs": [
				"www.facebook.com",
				"www.twitter.com",
				"www.instagram.com"
		]
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="admin_product">
    <meta name="twitter:description" content="">
    <meta property="og:title" content="admin_product">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body">
    <div class="u-align-center u-clearfix u-gradient u-section-1" id="sec-5e81">
      <div class="u-border-2 u-border-grey-75 u-image u-image-circle u-image-1" alt="" data-image-width="800" data-image-height="600" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction=""></div>
      <h4 class="u-text u-text-2" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="" style="background-color:white;">Daily Registrations</h4>
<table>
<tr>
<th>Username</th>
<th>Email</th>
<th>Registration date</th>
<th>Registration time</th>
</tr>
<?php 

$d= date('Y-m-d');

include('connection.php');
$sql = "select * from registration where reg_date = '$d'";  
            $result = mysqli_query($con, $sql);  
              
            $count = mysqli_num_rows($result); 
			
			
			
			if($count >= 1){  
			 
            while($row1=mysqli_fetch_assoc($result))
            {
				
			daily_reg($row1['username'],$row1['email'],$row1['reg_date'],$row1['reg_time']);
			
            }
			     
			}
			else
			{
				echo "No registrations today";
			}

?>
</table>
</body>
</html>