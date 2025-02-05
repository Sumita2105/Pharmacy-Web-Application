<?php
session_start();
include('connection.php');
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="payment.css">
<title>Payment</title>

	<!--css-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<!--Font Awesome-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
<link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
</head>
<body>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="pdf.php" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe" required="true" pattern="^[A-Za-z]+$" title="Name should contain only characters">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="email" id="email" name="email" placeholder="john@example.com" required="true" title="Email must follow a valid format">
            <label for="adr"><i class="fas fa-address-card"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required="true" pattern="^(?:[A-Za-z]+)(?:[A-Za-z0-9 _]*)$" title="Address cannot contain special characters">
            <label for="city"><i class="fas fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York" required="true" pattern="^[A-Za-z]+$" title="City name should contain only characters">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY" required="true" pattern="^[a-zA-Z ]*$" title="State name should contain only characters">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001" required="true" pattern="^[0-9]*$" title="Zip code should contain only numbers">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
             <i class="fab fa-cc-visa" style="color:blue;"></i>
			  <i class="fab fa-cc-mastercard" style="color:red;"></i>
             <i class="fab fa-cc-discover" style="color:orange;"></i>
            </div>
		    <i class="fas fa-credit-card"></i><label>Choose Card:</label><br>
			<input type="radio" value="Debit Card" name="card"/>Debit Card	<br>	
			<input type="radio" value="Credit Card" name="card"/>Credit Card<br><br>
            <i class="fas fa-file-signature"></i><label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" required="true" pattern="^[A-Za-z ]+$" title=" Name should contain only characters">
            <i class="far fa-id-card"></i><label for="ccnum">Card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required="true">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" required="true" pattern="^[A-Za-z]+$" title="Enter month name">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018" required="true" pattern="^[0-9]{4}$" title="Enter a valid year">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="password" id="cvv" name="cvv" placeholder="352" required="true" pattern="^[0-9]{3,4}$" title="CVV should contain 3-4 digits">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" name="checkout" class="btn">
      </form>
    </div>
  </div>
  <br><br>

<?php

include('demo1.php');
include('prod.php');
$prod1=0;
$prod2=0;
$total=$_POST['total'];
if(isset($_SESSION['cart']))
{
	
	if(isset($_POST['card']))
	{
          $prod1=0;
		  $prod2=0;
			$pid1=array_column($_SESSION['cart'],'pid');
			$sql1= "SELECT * from healthcare";
			$result1=mysqli_query($con,$sql1);
			
			while($row=mysqli_fetch_assoc($result1))
			{ 
		    $count=mysqli_num_rows($result1);
		      foreach($pid1 as $id1)
			  {
				  if($row['pid']==$id1)
				  {
                        $prod1=$prod1+1;
						  cart($row['pid'],$row['pprice'],$total);

				  }
			  }
			}
			
			$sql2= "SELECT * from medicine";
			$result2=mysqli_query($con,$sql2);
			
			while($row1=mysqli_fetch_assoc($result2))
			{ 
		    $count=mysqli_num_rows($result2);
		      foreach($pid1 as $id1)
			  {
				  if($row1['pid']==$id1)
				  {
                        $prod2=$prod2+1;
						 cart($row1['pid'],$row1['pprice'],$total);

				  }
			  }
			}
		
	}
}

	     
        echo "<br>";
function cart($prod_id,$pprice, $total)
{
	include('connection.php');
	

			
	$sql1= "SELECT * FROM healthcare where pid='$prod_id'";
	$result1= mysqli_query($con,$sql1);
	 if($result1)
	 {
		 while($row1=mysqli_fetch_assoc($result1))
		 {
			 $pname=$row1['pname'];
			$prod= "
				<div class=\"col-20\" style=\"margin-top:3em;\">
             <div class=\"container\">
			 <br>
                <h4>Cart <span class=\"price\" style=\"color:black\"><i class=\"fas fa-rupee\"></i> <b>$total</b></span></h4>
                 <p><span class=\"price\"></span></p>
                <hr>
			   <p><b>$pname</b><span class=\"price\" style=\"color:black\"><b>$pprice</b></span></p>"
			;
			echo $prod;
                 
                
		 }
	 }
	 
	 $sql2= "SELECT * FROM medicine where pid='$prod_id'";
	$result2=mysqli_query($con,$sql2);
	 if($result2)
	 {
		 while($row2=mysqli_fetch_assoc($result2))
		 {
			 $pname=$row2['pname'];
			 	$prod= "  
				<div class=\"col-25\">
             <div class=\"container\">
                 <p><span class=\"price\"></span></p>
                
			   <p><b>$pname</b><span class=\"price\" style=\"color:black\"><b>$pprice</b></span></p>"
			;
			echo $prod;
		 }
	 }
	 
	 $end="</div>
             </div>
              </div>";
			  echo $end;
	 
	 
	
}
?>
			
			



</body>
</html>