<html>
<head>
<?php
include('connection.php');
include('demo1.php');

?>

<link rel="stylesheet" href="view_products.css">
<center>
<h2>Healthcare Products</h2>
</center>
</head>
<body>
<table>
<tr>
<th>Product Id</th>
<th>Product Name</th>
<th>Product Image</th>
<th>Product Original Price</th>
<th>Product Price</th>
<th>Quantity</th>
<th>Weight</th>
<th>Shipping</th>
<th>Manufacturer</th>
<th>Country</th>
<th>Time</th>
<th>Category</th>
<th>Manufacture Date</th>
<th>Expiry Date</th>
<th>Delete</th>
</tr>
<?php
$sql = "select * from healthcare";  
            $result = mysqli_query($con, $sql);  
              
            $count = mysqli_num_rows($result); 
			
			
			
			if($count >= 1){  
			 
            while($row1=mysqli_fetch_assoc($result))
            {
				
			healthcare($row1['pid'],$row1['pname'],$row1['pimage'],$row1['p_orgprice'],$row1['pprice'],$row1['qty'],$row1['weight'],
			$row1['shipping'],$row1['manufacturer'],$row1['country'],$row1['time'],$row1['category'],$row1['manu_date'],$row1['exp_date']);
			
            }
			     
			}
			

?>
</table>
<br>
<a href="view_medicines.php"><input type="submit" value="View Medicines"></a>
<a href="admin_dashboard.php"><input type="submit" value="Dashboard"></a>

</body>

</html>