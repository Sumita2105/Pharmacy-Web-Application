
<?php
require_once('connection.php');
require_once('demo1.php');


	
if(isset($_POST['remove']))
{
	if($_GET['action']=='remove')
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($value['pid']==$_GET['id'])
			{
				unset($_SESSION['cart'][$key]);
				echo '<script>alert("Product has been removed..!")</script>';
				echo '<script>window.location="cart.php" </script>';
			}
		}
	}
}




?>

<html>
<head>

	<title>Cart</title>
<?php
include('header.php');
?>

<link rel="stylesheet" href="nicepage.css" media="screen">
	    <link rel="stylesheet" href="cart.css" media="screen">
<link rel="stylesheet" href="register.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.21.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    

<!--css-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<!--Font Awesome-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">


<!--External css-->
<link rel="stylesheet" href="demo.css">
</head>
<body class="bg-light">

	
<div class="container-fluid">
	<div class="row px-5">
		<div class="col-md-7">
        <div class="shopping-cart">
        	<h6> My Cart</h6>
        	<hr>
        <?php 
		$pid="";
		
        $total=0;
        if(isset($_SESSION['cart']))
        {
        $pid=array_column($_SESSION['cart'], 'pid');
		
		 $sql1= "select * from healthcare";

         $result1 = mysqli_query($con, $sql1);  
         while($row=mysqli_fetch_assoc($result1))
         {
         	foreach($pid as $id)
         	{
         		if($row['pid']==$id)
         		{
         			cartElement($row['pimage'],$row['pname'], $row['pprice'], $row['pid'], $row['manufacturer']);
         			$total=$total+(int)$row['pprice'];
					
					
					
         		}
         	}

         }
		 
		 $sql2= "select * from medicine";

         $result2 = mysqli_query($con, $sql2);  
         while($row1=mysqli_fetch_assoc($result2))
         {
         	foreach($pid as $id)
         	{
         		if($row1['pid']==$id)
         		{
         			cartElement($row1['pimage'],$row1['pname'], $row1['pprice'], $row1['pid'], $row1['manufacturer']);
         			$total=$total+(int)$row1['pprice'];
					
					
         		}
         	}

         }
        }
        else
        {

          echo "<h5>Cart is empty</h5>";
        }

        ?>
        </div>
       </div>
       <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25%">
       	<div class="pt-4">
		<form action="payment.php">
       		<h5>Price Details</h5>
       		<hr>
       		<div class="row-price-details">
       			<div class="col-md-6"></div>
       			<?php
                  if(isset($_SESSION['cart']))
                  {
                  	count($_SESSION['cart']);
                  	echo "<h6>Price($count items)</h6>";
                  }
                  else{
                  	echo "<h6>Price(0 items)</h6>";

                  }


       			?>
       			<h6>Delivery charges</h6>
       			<hr>
       			<h6>Amount Payable</h6>
       			<div class="col-md-6">
       				<h6>
       					<?php
       					echo $total;
       					?>
       				</h6>
       				<h6 class="text-success">FREE</h6>
       				<hr>
       				<h6>
       					<?php
       					echo $total;
       					?>
       				</h6>
       			</div>

       		</div>
               <div id="paypal-payment-button">

               </div><br>

               <script src="https://www.paypal.com/sdk/js?client-id=AYHCUrEAQyBvKqB-J-n0UsE54swei7-ryfCmfnbzJZ3zLupZ8RMuLlUEIcHcOgApSoDQJ3pnI_4FgmoF&disable-funding=credit,card"></script>
              <script src="index.js"></script>			   
			</form>
			<?php
			$checkout="<form action=\"payment.php\" method=\"post\">
		 <input type=\"submit\" name=\"card\" class=\"fcc-btn\" value=\"Credit/Debit Card\" style=\"background-color:#BEBEBE; color:black; padding: 15px 25px; border-radius:18px; height:50px; width:450px; text-decoration: none;\"/> 					 
			<input type=\"hidden\" name=\"pid\" value=\"$pid\"> 
			<input type=\"hidden\" name=\"total\" value=\"$total\"> 
			
			</form>";
			echo $checkout;
			
			?>
       	</div>

       </div>
	</div>
</div>
	
<?php
include('footer.php');
?>

	<!--Javascript files-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>


</body>
</html>