<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
?>
<head>
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
<?php

include('connection.php');
include('delete_healthcare.php');

    

	function component($pname,$pprice,$pimage,$pdesc,$pid,$p_orgprice,$manufacturer,$shipping)
	{
		$element="
		
        
  
          <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
            <form action=\"Home.php\" method=\"post\">
                <div class=\"card shadow\">
                    <div>
                       <img src=\"$pimage\" alt=\"Sanitizer\" class=\"img-fluid card-img-top\"> 

                    </div>
                    <div class=\"card-body\">
                      <h5 class=\"card-title\">$pname</h5>                   
                      <h5 style=\"color:brown;\">
                        <small><s class=\"text-secondary\" style=\"color:blue;\"> Rs.$p_orgprice</s></small>					  
                          <span class=\"price\"  style=\"color:green;\">Rs.$pprice</span>
                      </h5>
					 
                      <button type=\"submit\" class=\"btn my-3\" name=\"add\"  style=\"background-color:#99f2c8;\"><i class=\"fas fa-shopping-cart pr-2\"></i> Add to Cart</button>
                      <input type=\"hidden\" name=\"pid\" value=\"$pid\">
					  
                    </div>
                </div>

            </form>

    </div>
	
		";
		echo $element;
		
	}
	
	
 function recommend_prod($category)
 {     
     
      
 include('connection.php');
 
	
       $sql= "select * from healthcare WHERE category='$category'";

        $result = mysqli_query($con, $sql);
	          while($row=mysqli_fetch_assoc($result))
        {
			 
            component($row['pname'], $row['pprice'], $row['pimage'], $row['pdesc'], $row['pid'], $row['p_orgprice'], $row['manufacturer'], $row['shipping']);
        }
		


 }
 


   function getData(){
        $host = "localhost";  
        $user = "root";  
        $password = '';  
        $db_name = "pharmacy_data";  
          
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  
      $sql= "select * from healthcare LIMIT 8";

      $result = mysqli_query($con, $sql);  

     // if(!mysqli_num_rows($result)>0)
     // {
        return $result;

     // }

  }
  
  
  //healthcare page
    function gethealthcare(){
        $host = "localhost";  
        $user = "root";  
        $password = '';  
        $db_name = "pharmacy_data";  
          
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  
      $sql= "select * from healthcare  WHERE category='Personal Care' OR category='Covid Essentials' LIMIT 8";

      $result = mysqli_query($con, $sql);  

     // if(!mysqli_num_rows($result)>0)
     // {
        return $result;

     // }

  }



function cartElement($pimage,$pname,$pprice,$pid,$manufacturer)
{
  $element="
  
  <form action=\"cart.php?action=remove&id=$pid\" method=\"post\" class=\"cart-items\">
            <div class=\"border rounded\">
              <div class=\"row-bg-white\">
                <div class=\"col-md-3\">
                  <img src=$pimage alt=\"Sanitizer\" class=\"img-fluid\">
                </div>
                <div class=\"col-md-6\">
                  <h5 class=\"pt-2\">$pname</h5>
                  <small class=\"text-secondary\">Manufacturer: $manufacturer</small>
                  <h5 class=\"pt-2\">Rs.$pprice</h5>  
                  
                  <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>

                </div>
                <br>
                
              </div>
            </div>

        </form>

  ";
  echo $element;
}


function daily_reg($uname,$email,$date,$time)
{
 $table ="


  <tr>
    <td>$uname</td>
    <td>$email</td>
    <td>$date</td>
	<td>$time</td>
  </tr>

";


echo $table;
}

function healthcare($pid,$pname,$pimage,$p_orgprice,$pprice,$qty,$weight,$shipping,$manufacturer,$country,$time,$category,$manu_date,$exp_date)
{
	
	$healthcare="
	
	<tr>
    <td>$pid</td>
    <td>$pname</td>
	<td>$pimage</td>
	<td>$p_orgprice</td>
    <td>$pprice</td>
    <td>$qty</td>
	<td>$weight</td>
    <td>$shipping</td>
    <td>$manufacturer</td>
	<td>$country</td>
	<td>$time</td>
    <td>$category</td>
    <td>$manu_date</td>
	<td>$exp_date</td>	
	

	<form action=\"delete_healthcare.php\" method=\"post\" >
	<td><input type=\"submit\" name=\"delete\" value=\"Delete\"  style=\"background-color:#04AA6D; height:35px; width:70px; border-radius:12px;\" /></td>
  </tr> 
    <input type=\"hidden\" name=\"pid\" value=\"$pid\">  
  </form>
    
  
	";
	echo $healthcare;
	
	
}
 
 function medicines($pid,$pname,$pimage,$p_orgprice,$pprice,$qty,$weight,$manu_date,$exp_date,$shipping,$manufacturer,$country,$time)
{
   
	$med="
	<tr>
    <td>$pid</td>
    <td>$pname</td>
	<td>$pimage</td>
	<td>$p_orgprice</td>
    <td>$pprice</td>
    <td>$qty</td>
	<td>$weight</td>
	<td>$manu_date</td>
	<td>$exp_date</td>
    <td>$shipping</td>
    <td>$manufacturer</td>
	<td>$country</td>
	<td>$time</td>
	

	<form action=\"delete_medicine.php\" method=\"post\" >
	<td><input type=\"submit\" name=\"delete\" value=\"Delete\"  style=\"background-color:#04AA6D; height:35px; width:70px; border-radius:12px;\" /></td>
  </tr> 
    <input type=\"hidden\" name=\"pid\" value=\"$pid\">  
  </form>
	";
	echo $med;
	
}
        


	
?>