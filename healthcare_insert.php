<?php


?>


<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">

<link rel="stylesheet" href="payment.css">
<title>Add Healthcare Products</title>
<style>
textarea, input[type=number], input[type=file]{
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=radio]{
  width: 2%;
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
            <h3><i class="fas fa-leaf"></i>Add Healthcare Products</h3>
            <label for="pr_id"><i class="fa fa-product-hunt"></i>Product Id</label>
            <input type="text" name="pid" placeholder="M02" required="true" pattern="^[A-Za-z0-9]+$" title="Product ID should be alphanumeric">
            <label for="pr_name"><i class="fas fa-air-freshener"></i>Product Name</label>
            <input type="text" name="pname" placeholder="Dettol" required="true" pattern="^[A-Za-z0-9]+$" title="Product name can be alphanumeric">
            <label for="pr_desc"><i class="fa fa-address-card-o"></i>Product Description</label>
            <input type="text" name="pdesc" required="true" pattern="^(?:[A-Za-z]+)(?:[A-Za-z0-9 _]*)$" title="Description cannot contain special characters">
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

          </div>
          
		  
          <div class="col-50">
            

            <label for="country"><i class="fas fa-globe-europe"></i>Country</label>
            <input type="text"  name="country" placeholder="India" required="true" pattern="^[A-Za-z]+$" title="Country name can only contain alphabets">
	        <label for="cname"><i class="fas fa-shipping-fast"></i>Shipping Charges</label>
            <input type="text"  name="shipping" placeholder="0" required="true" pattern="^[0-9]+$" title="Contains only numbers">
            <label for="ccnum"><i class="fas fa-industry"></i>Manufacturer</label>
            <input type="text"  name="manufacturer" placeholder="Bayer" required="true" pattern="^[A-Za-z]+$" title="Contains only alphabets">
			<label><i class="fas fa-air-freshener"></i>Category</label>
			<input type="radio" name="category" value="Health Drinks" required="true" >Health Drinks<br/>
            <input type="radio" name="category" value="Baby and Mom care" required="true">Baby and Mom care<br/>
           <input type="radio" name="category" value="Personal Care" required="true">Personal Care<br/>
		   <input type="radio" name="category" value="Covid Essentials" required="true">Covid Essentials<br/><br/>
          
		   
             <label for="fname"><i class="far fa-calendar-alt"></i>Manufacture date</label>
            <input type="date" name="manu_date" placeholder="" required="true" >
			<label for="fname"><i class="far fa-calendar-alt"></i>Expiry date</label>
            <input type="date" name="exp_date" placeholder="" required="true">         
          </div>
          
        </div>
        
       <button type="submit" value="Add" class="btn"><i class="fas fa-plus"></i>Add</button>
      </form>
    </div>
  </div>

</div>

</body>
</html>