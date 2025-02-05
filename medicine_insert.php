<?php
include('connection.php');
error_reporting(E_ERROR | E_PARSE);
$pid= $_POST['pid'];
$pname= $_POST['pname'];
$desc= $_POST['pdesc'];
$pimage= $_POST['pimage'];
$p_orgprice= $_POST['p_orgprice'];
$pprice= $_POST['pprice'];
$qty= $_POST['qty'];
$weight= $_POST['weight'];
$manu_date= $_POST['manu_date'];
$exp_date= $_POST['exp_date'];
$shipping= $_POST['shipping'];
$manufacturer= $_POST['manufacturer'];
$country= $_POST['country'];
$time=date('Y-m-d H:i:s');

$uses= $_POST['uses'];
$side_effects= $_POST['side_effects'];


    $sql = "INSERT INTO medicine(pid, pname, pdesc, pimage,p_orgprice,pprice,qty, weight, manu_date, exp_date,shipping, manufacturer,country,time,uses,side_effects)
                                VALUES ('$pid','$pname', '$desc', '$pimage', '$p_orgprice', '$pprice','$qty','$weight','$manu_date','$exp_date','$shipping','$manufacturer','$country','$time','$uses','$side_effects')";    
	if(mysqli_query($con, $sql))
	    {
          echo ("<script LANGUAGE='JavaScript'>                     
          window.location.href='add_product.php';					   					   
		  window.alert('Records inserted successfully!!');
          </script>");
		}
	else
	{
		echo mysqli_error($con);
	}


?>

<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">

<link rel="stylesheet" href="payment.css">
<title>Add Medicines</title>
<style>
textarea, input[type=number], input[type=file]{
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
</style>
</head>
<body>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3><i class="fas fa-capsules"></i>Add Medicines</h3>
            <label for="pid"><i class="fa fa-product-hunt"></i>Product Id</label>
            <input type="text" name="pid" placeholder="M02" required="true" pattern="^[A-Za-z0-9]+$" title="Product ID should be alphanumeric">
            <label for="pname"><i class="fas fa-capsules"></i>Product Name</label>
            <input type="text" name="pname" placeholder="Aspirin" required="true" pattern="^[A-Za-z0-9]+$" title="Product name can be alphanumeric">
            <label for="pr_desc"><i class="fa fa-address-card-o"></i>Product Description</label>
            <input type="text" name="pdesc" placeholder="Aspirin is a nonsteroidal anti-inflammatory drug (NSAID)" required="true" pattern="^(?:[A-Za-z]+)(?:[A-Za-z0-9 _]*)$" title="Description cannot contain special characters">
            <label for="city"><i class="fas fa-images"></i> Product Image</label>
            <input type="file" name="pimage" placeholder="New York" required="true" accept="image/png, image/jpeg, image/jpg">

            <div class="row">
              <div class="col-50">
                <label for="org"><i class="fas fa-rupee-sign"></i>Original Price</label>
                <input type="text" name="p_orgprice" placeholder="200" required="true" pattern="^[0-9]+$" title="Price can only contain numbers">
              </div>
              <div class="col-50">
                <label for="med_price"><i class="fas fa-rupee-sign"></i>MediPlus Price</label>
                <input type="text" name="pprice" placeholder="188" required="true" pattern="^[0-9]+$" title="Price can only contain numbers">
              </div>
            </div>
			<label for="qty"><i class="fab fa-nutritionix"></i>Quantity</label>
            <input type="number" name="qty" placeholder="10" required="true" min="1" max="150">
			<label for="weight"><i class="fas fa-weight"></i>Weight</label>
            <input type="text" name="weight" placeholder="700 ml" required="true" pattern="^[A-Za-z0-9]+$" title="Weight can be alphanumeric">
			<label for="fname"><i class="far fa-calendar-alt"></i>Manufacture date</label>
            <input type="date" name="manu_date" placeholder="" required="true" >
			<label for="fname"><i class="far fa-calendar-alt"></i>Expiry date</label>
            <input type="date" name="exp_date" placeholder="" required="true">
          </div>
          
		  
          <div class="col-50">
            
            <label for="cname"><i class="fas fa-shipping-fast"></i>Shipping Charges</label>
            <input type="text"  name="shipping" placeholder="0" required="true" pattern="^[0-9]+$" title="Contains only numbers">
            <label for="ccnum"><i class="fas fa-industry"></i>Manufacturer</label>
            <input type="text"  name="manufacturer" placeholder="Bayer" required="true" pattern="^[A-Za-z]+$" title="Contains only alphabets">
            <label for="country"><i class="fas fa-globe-europe"></i>Country</label>
            <input type="text"  name="country" placeholder="India" required="true" pattern="^[A-Za-z]+$" title="Country name can only contain alphabets">
            <label for="safety"><i class="fas fa-user-shield"></i>Safety Advice</label>
			<textarea  name="safety" rows="7" cols="50" placeholder="Doctors do not usually recommend aspirin for people under 18." pattern="^[A-Za-z0-9]+$" title="Can be alphanumeric"></textarea>
            <label for="uses"><i class="fas fa-seedling"></i>Uses</label>
			<textarea name="uses" rows="7" cols="50" placeholder="Aspirin has many uses, including relieving pain and swelling,managing various conditions, and reducing the risk of cardiovascular events in people with a high risk." pattern="^[A-Za-z0-9]+$" title="Can be alphanumeric"></textarea>
			<label for="side"><i class="fas fa-exclamation-triangle"></i>Side Effects</label>
			<textarea  name="side_effects" rows="7" cols="50" placeholder="Pain and swelling" pattern="^[A-Za-z0-9]+$" title="Can be alphanumeric"></textarea>            
          </div>
          
        </div>
        
       <button type="submit" value="Add" class="btn" name="add1"><i class="fas fa-capsules"></i>Add</button>
      </form>
    </div>
  </div>
</div>


</body>
</html>