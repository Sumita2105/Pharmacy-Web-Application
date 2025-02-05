<!DOCTYPE html>
<html style="font-size: 16px;">
<?php
include('header.php');
?>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>login</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="login.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
	<script type="text/javascript" src="Validation.js"></script>
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
    <meta name="twitter:title" content="login">
    <meta name="twitter:description" content="">
    <meta property="og:title" content="login">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body">
    <section class="u-clearfix u-image u-parallax u-section-1" id="sec-a30e" data-image-width="2000" data-image-height="1333">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-group u-radius-50 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h3 class="u-align-center u-text u-text-default u-text-1">Sign In</h3>
            <div class="u-image u-image-circle u-preserve-proportions u-image-1" alt="" data-image-width="5354" data-image-height="2802"></div>
            <div class="u-form u-login-control u-form-1">
              <form action="authentication.php" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-35 u-form-vertical u-inner-form" source="custom" name="form-2" style="padding: 10px;">
                <div class="u-form-group u-form-name">
                  <label for="username-708d" class="u-form-control-hidden u-label"></label>
                  <input type="email" placeholder="Enter your Email" id="username-708d" name="email1" class="u-grey-5 u-input u-input-rectangle" title="Enter a valid email address" required="" autofocus="autofocus">
                </div>
                <div class="u-form-group u-form-password">
                  <label for="password-708d" class="u-form-control-hidden u-label"></label>
                  <input type="password" placeholder="Enter your Password" id="password1" name="pass" class="u-grey-5 u-input u-input-rectangle" pattern="^(?=.{10,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$" title="Password should have atleast 8 character and must contain one Capital letter, one small letter, one number and one special character" required="">
                  <input type="checkbox" onclick="password_check()">Show Password
				</div>
                
                <div class="u-align-center u-form-group u-form-submit">
                  <a href="#" class="u-btn u-btn-round u-btn-submit u-button-style u-radius-17 u-btn-1">Sign In<br>
                  </a>
                  <input type="submit" value="submit" class="u-form-control-hidden" name="login">
                </div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>
            </div>
            <a href="forgot_pass.php" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-2">Forgot Password ?</a>
            <a href="registration.php" data-page-id="24236962" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-3">Don't have an Account? Sign Up</a>
           <center><a href="admin_login.php" data-page-id="24236962" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-3">Admin Login</a>        
		 </center>
		 </div>
        </div>
      </div>
    </section>
    
    
<?php
include('footer.php');
?>

  </body>
</html>