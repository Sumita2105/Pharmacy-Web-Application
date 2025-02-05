<html>
<head></head>
<body style="backgroud-color:#E0FFFF;">
<?php

include('header.php');
include('healthcare_desc.php');
include('medicine_desc.php');
include('connection.php');
include('demo1.php');


	

    if(isset($_POST['add1']))
    {
	if(isset($_SESSION['user']))
    {
     if(isset($_SESSION['cart']))
		
     {
		   //healthcare
             $item_array_id= array_column($_SESSION['cart'],"pid");

               if(in_array($_POST['pid'],$item_array_id))
               {
                  echo '<script>alert("Product already added in the cart!!")</script>';
                  echo '<script>window.location="search.php"</script>';
               }else
               {
                 $count= count($_SESSION['cart']);
                  $item_array=array('pid'=> $_POST['pid']);
                  $_SESSION['cart'][$count]=$item_array;
             
               }
			   
            }
     else
     {
        $item_array=array('pid'=> $_POST['pid']);

        //create session variables
        $_SESSION['cart'][0]=$item_array;
     
     }
    }
	else{
		echo '<script>alert("Login!!")</script>';
	}
   }
   
   
     if(isset($_POST['add2']))
    {
	if(isset($_SESSION['user']))
    {
     if(isset($_SESSION['cart']))
		
     {
		   //medicine
             $item_array_id= array_column($_SESSION['cart'],"pid");

               if(in_array($_POST['pid'],$item_array_id))
               {
                  echo '<script>alert("Product already added in the cart!!")</script>';
                  echo '<script>window.location="search.php"</script>';
               }else
               {
                 $count= count($_SESSION['cart']);
                   $item_array=array('pid'=> $_POST['pid']);
                  $_SESSION['cart'][$count]=$item_array;
                  
               }
			   
            }
     else
     {
        $item_array=array('pid'=> $_POST['pid']);

        //create session variables
        $_SESSION['cart'][0]=$item_array;
        
     }
    }
	else{
		echo '<script>alert("Login!!")</script>';
	}
   }



$Search = $_POST['search']; 

            $sql = "select * from healthcare where pname LIKE '%$Search%'";  
            $result = mysqli_query($con, $sql);  
             
            $count = mysqli_num_rows($result); 
			
			
			$sql1 = "select * from medicine where pname LIKE '%$Search%'";  
            $result1 = mysqli_query($con, $sql1);  
             
            $count1 = mysqli_num_rows($result1); 
			
			
			if($count >=1)
			{
				
				while($row=mysqli_fetch_assoc($result))
                {
                healthcare_descp($row['pid'],$row['pname'], $row['pprice'], $row['pimage'], $row['pdesc'], $row['p_orgprice'],$row['manu_date'], $row['exp_date'], $row['manufacturer'], $row['shipping'], $row['country'], $row['category'], $row['weight']);
              
				
				$recom="    <section class=\"u-clearfix u-palette-4-light-3 u-section-2\" id=\"sec-b409\">
	              <div class=\"u-clearfix u-sheet u-sheet-1 row text-center py-5\">";
				  echo $recom;
	               recommend_prod($row['category']);
				   
	            $recom1="  </div>
                </section>";
				echo $recom1;
				
				}
				 
				
				
				
			}
		
			else if ($count1 >=1)
			{
				
				while($row1=mysqli_fetch_assoc($result1))
                {
                med_descp($row1['pid'],$row1['pname'], $row1['pprice'], $row1['pimage'], $row1['pdesc'], $row1['p_orgprice'],$row1['manu_date'], $row1['exp_date'], $row1['manufacturer'], $row1['shipping'], $row1['country'], $row1['weight'], $row1['uses'], $row1['side_effects'], $row1['safety_advice']);
                }
			}
			
			else
			{
				echo ("<script LANGUAGE='JavaScript'>                     
                       window.location.href='Home.php';					   					   
					   window.alert('No results found!!');
                       </script>");
				
			}



?>
<?php
include('footer.php');
?>
</body>
</html>