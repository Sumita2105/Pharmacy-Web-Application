<?php
include('header.php');
include('demo1.php');
include('connection.php');
include('medicine_desc.php');

$Search = $_POST['med_search1']; 
		
			$sql1 = "select * from medicine where pname LIKE '%$Search%'";  
            $result1 = mysqli_query($con, $sql1);  
             
            $count1 = mysqli_num_rows($result1); 
			

		
			if ($count1 >=1)
			{
				echo $count1;
				while($row1=mysqli_fetch_assoc($result1))
                {
                med_descp($row1['pid'],$row1['pname'], $row1['pprice'], $row1['pimage'], $row1['pdesc'], $row1['p_orgprice'],$row1['manu_date'], $row1['exp_date'], $row1['manufacturer'], $row1['shipping'], $row1['country'], $row1['weight'], $row1['uses'], $row1['side_effects'], $row1['safety_advice']);

                }
			}
			else
			{
				echo ("<script LANGUAGE='JavaScript'>                     
                       window.location.href='order_med.php';					   					   
					   window.alert('No results found!!');
                       </script>");
				
			}


include('footer.php');
?>