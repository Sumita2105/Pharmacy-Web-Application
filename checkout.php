<?php
session_start();
unset($_SESSION['cart']);
?>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="alert alert-success" role="alert" style="height:70px; margin-top:10em;">
  <center>Transaction Sucessful!!<br>
  <a href="Home.php">Home Page</a></center>
</div>
</body>
</html>