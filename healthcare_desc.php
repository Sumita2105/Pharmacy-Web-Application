
<html>
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

    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">


</head>

<br>
<?php


function healthcare_descp($pid,$pname,$pprice,$pimage,$pdesc,$p_orgprice,$manu_date,$exp_date,$manufacturer,$shipping,$country,$category,$weight)
{
  $healthcare= 
  
  "<form action=\"search.php\" method=\"post\" class=\"cart-items\">
  <section class=\"mb-5\" style=\"margin-left:4em;\">

  <div class=\"row\">
    <div class=\"col-md-5 mb-2 mb-md-0\">

      <div id=\"mdb-lightbox-ui\"></div>

      <div class=\"mdb-lightbox\">



          <div class=\"col-9 mb-0\">
            <figure class=\"view overlay rounded z-depth-1 main-img\">
              <a href=\"$pimage\"
                data-size=\"710x823\">
                <img src=\"$pimage\"
                  class=\"img-fluid z-depth-1\" style=\"height:60%; weight:120%; margin-top:3em;\">
              </a>
            </figure>

           
          </div>

       
      </div>

    </div>
    <div class=\"col-md-6\">

      <h4 style=\"color:#343434;\">$pname</h4>
      

      <h5 style=\"color:brown;\"><span class=\"mr-1\"><strong><small><s>$$p_orgprice</s></small></strong></span></h5>
	  <h5 style=\"color:#228B22;\"><span class=\"mr-1\"><strong>$$pprice</strong></span></h5>
      <p class=\"pt-1\" style=\"font-size:14px;\">$pdesc</p>
	  <hr>
      <div class=\"table-responsive\">
        <table class=\"table table-sm table-borderless mb-0\">
          <tbody>
		     <tr>
              <th class=\"pl-0 w-25\" scope=\"row\"><strong><i class=\"fas fa-check-circle\" style=\"color:#50C878;\"></i>Weight:</strong></th>
              <td style=\"color:#0047AB;\">$weight</td>
            </tr>
            <tr>
              <th class=\"pl-0 w-25\" scope=\"row\"><strong><i class=\"fas fa-check-circle\" style=\"color:#50C878;\"></i>Manufacturer: <strong></th>
              <td style=\"color:#0047AB;\">$manufacturer</td>
            </tr>
            <tr>
              <th class=\"pl-0 w-25\" scope=\"row\"><strong><i class=\"fas fa-check-circle\" style=\"color:#50C878;\"></i>Manufacture Date:</strong></th>
              <td style=\"color:#0047AB;\">$manu_date</td>
            </tr>
            <tr>
              <th class=\"pl-0 w-25\" scope=\"row\"><strong><i class=\"fas fa-check-circle\" style=\"color:#50C878;\"></i>Expiry Date:</strong></th>
              <td style=\"color:#0047AB;\">$exp_date</td>
            </tr>
			 <tr>
              <th class=\"pl-0 w-25\" scope=\"row\"><strong><i class=\"fas fa-check-circle\" style=\"color:#50C878;\"></i>Country:</strong></th>
              <td style=\"color:#0047AB;\">$country</td>
            </tr>
			  <tr>
              <th class=\"pl-0 w-25\" scope=\"row\"><strong><i class=\"fas fa-check-circle\" style=\"color:#50C878;\"></i>Category:</strong></th>
              <td style=\"color:#0047AB;\">$category</td>
            </tr>
			
          </tbody>
        </table>
      </div>
      <hr>
      <div class=\"table-responsive mb-2\">
        <table class=\"table table-sm table-borderless\">
          <tbody>
            <tr>
              <td class=\"pl-0 pb-0 w-25\">Quantity</td>
              
            </tr>
            <tr>
              <td class=\"pl-0\">
                <div class=\"def-number-input number-input safari_only mb-0\">
                  
                  <input class=\"quantity\" min=\"0\" max=\"5\" name=\"quantity\" value=\"1\" type=\"number\">

                </div>
              </td>
              <td>
                <div class=\"mt-1\">
             
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <button type=\"submit\" class=\"btn btn-light btn-md mr-1 mb-2\" style=\"background-color:#99f2c8\" name=\"add1\"><i
          class=\"fas fa-shopping-cart pr-2\"></i>Add to cart</button>
		   <input type=\"hidden\" name=\"pid\" value=\"$pid\">
    </div>
 

</div>
 </section>
 </form>";
 echo $healthcare;
 
 }
 
?>





 
	
 
