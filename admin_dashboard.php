 <?php

 include('header.php');
 error_reporting(E_ERROR | E_PARSE);

?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 300px;
 
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 100%;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>admin_product</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="admin_product.css" media="screen">

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
      <h4 class="u-text u-text-2" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="" style="background-color:white;">Admin Dashboard</h4>
    
	<form action="view_products.php">  
    <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="view_products.php">
     <center> <img src="./images/all_products.jpg" alt="Cinque Terre" width="600" height="700">
    </a>
	<input type="submit" name="orders" value="View Products"/></center>
  </div>
</div>
</form>

<form action="add_product.php">
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="add_product.php">
     <center> <img src="./images/add_products.jpg" alt="Forest" width="600" height="400">
    </a>
	<input type="submit" name="orders" value="Add Products"/></center>
  </div>
</div>
</form>


<form action="daily_registration.php">
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="daily_registration.php">
    <center>  <img src="./images/registration.jpg" alt="Mountains" width="700" height="500">
    </a>
    <input type="submit" name="orders" value="Daily registrations"/></center>
  </div>
</div>
</form>


<form action="admin_registration.php">
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="admin_registration.php">
    <center>  <img src="./images/admin.jpg" alt="Mountains" width="600" height="400">
    </a>
    <input type="submit" name="registration" value="New Admin Registration"/></center>
  </div>
</div>
</form>
<div class="clearfix"></div>


   <br>
	<form action="login.php" method="post">
	<center><input type="submit" value="Logout" style="backgroun-color:green; height:50px; width:180px; border-radius:14px;"/></center>	
	</form>
	 </div>
<?php
include('footer.php');
?>
   
  </body>
</html>