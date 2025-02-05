<?php
session_start();
include('connection.php');
function orders()
{
	include('connection.php');
$length =10;
$data = '0ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
 
$order_id= substr(str_shuffle($data), 0, $length);


$name=$_SESSION['user'];

$time=date("Y-m-d H:i:s");


foreach($_SESSION['cart'] as $key => $value)
{
	 

	$prod_id=$value['pid'];

	$pname="";
    $sql= "Select * from healthcare where pid='$prod_id'";
	$result= mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);
	echo $count;
	if($result)
	{
		while($row=mysqli_fetch_assoc($result))
		{
             $id=$row['pid'];
			 $sql= "INSERT INTO orders(order_id,email,prod_id,ord_time) VALUES('$order_id','$name','$id','$time')";
           $result=mysqli_query($con,$sql);
		}
		
	}
	
	
    $sql1= "Select * from medicine where pid='$prod_id'";
	$result1= mysqli_query($con,$sql1);
	if($result1)
	{
		while($row1=mysqli_fetch_assoc($result1))
		{
			$id=$row1['pid'];
			$sql= "INSERT INTO orders(order_id,email,prod_id,ord_time) VALUES('$order_id','$name','$id','$time')";
            $result=mysqli_query($con,$sql);
		}
		
	}
	
	
	
}

}

?>