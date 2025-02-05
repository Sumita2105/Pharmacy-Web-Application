
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
<?php

function med_descp($pid,$pname,$pprice,$pimage,$pdesc,$p_orgprice,$manu_date,$exp_date,$manufacturer,$shipping,$country,$weight,$uses,$side_effects,$safety_advice)
{
  $med= "
   <form action=\"search.php\" method=\"post\" class=\"cart-items\">
  <section class=\"mb-5\">
  <div class=\"row\">
    <div class=\"col-md-5 mb-2 mb-md-0\">

      <div id=\"mdb-lightbox-ui\"></div>

      <div class=\"mdb-lightbox\">


          <br><br>
          <div class=\"col-9 mb-0\" style=\"margin-left:3.2em;\">
            <figure class=\"view overlay rounded z-depth-1 main-img\">
              <a href=\"$pimage\"
                data-size=\"710x823\">
                <img src=\"$pimage\"
                 class=\"img-fluid z-depth-1\" style=\"height:90%; width:100%;\">
              </a>
            </figure>

           
          </div>

       
      </div>

    </div>
    <div class=\"col-md-6 container\" style=\" margin-top:1em; border-radius:10px;\">

      <h4 style=\"color:#343434;\">$pname</h4>
      

      <h5 style=\"color:brown;\"><span class=\"mr-1\"><strong><small><s>$$p_orgprice</s></small></strong></span></h5>
	  <h5 style=\"color:#228B22;\"><span class=\"mr-1\"><strong>$$pprice</strong></span></h5>
      <p class=\"pt-1\">$pdesc</p><hr>
      <div class=\"table-responsive container\" style=\" margin-top:1em; border-radius:10px;\">
        <table class=\"table table-sm table-borderless mb-0\">
          <tbody>
		     <tr>
              <th class=\"pl-0 w-25\" scope=\"row\"><strong>Weight:</strong></th>
              <td style=\"color:#0047AB;\">$weight</td>
            </tr>
            <tr>
              <th class=\"pl-0 w-25\" scope=\"row\"><strong>Manufacturer: <strong></th>
              <td style=\"color:#0047AB;\">$manufacturer</td>
            </tr>
            <tr>
              <th class=\"pl-0 w-25\" scope=\"row\"><strong>Manufacture Date:</strong></th>
              <td style=\"color:#0047AB;\">$manu_date</td>
            </tr>
            <tr>
              <th class=\"pl-0 w-25\" scope=\"row\"><strong>Expiry Date:</strong></th>
              <td style=\"color:#0047AB;\">$exp_date</td>
            </tr>
			 <tr>
              <th class=\"pl-0 w-25\" scope=\"row\"><strong>Country:</strong></th>
              <td style=\"color:#0047AB;\">$country</td>
            </tr>

			
          </tbody>
        </table>
      </div>
      <hr>
      <div class=\"table-responsive mb-2 \">
        <table class=\"table table-sm table-borderless\">
          <tbody>
            <tr>
              <td class=\"pl-0 pb-0 w-25\">Quantity</td>
              
            </tr>
            <tr>
              <td class=\"pl-0\">
                <div class=\"def-number-input number-input safari_only mb-0\">
                  
                  <input class=\"quantity\" min=\"1\" max=\"5\" name=\"quantity\" value=\"1\" type=\"number\">

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
      <button type=\"submit\" class=\"btn btn-md mr-1 mb-2\" style=\"background-color:#99f2c8\" name=\"add2\">
	  <i class=\"fas fa-shopping-cart pr-2\"></i>Add to cart</button>
	  <input type=\"hidden\" name=\"pid\" value=\"$pid\">
    </div>
 


<hr>

<div class=\"col-md-5\" style=\" margin-left:1em; background-color:off white;\">

      <div class=\"table-responsive\">
        <table class=\"table table-sm table-borderless mb-0\">
          <tbody>
		  <div class=\"container\" style=\"background-color:#088F8F; border-radius:10px; height:35px;\">
		<h5 style=\"color:white;\">Precautions and Warnings</h5>
		</div>
		  <div class=\"container\" style=\"background-color:D1EEEE; border-radius:10px; margin-top:1em; \">
		 <h6><i style=\"color:#47CACC;\" class=\"fas fa-leaf\"></i>Uses</h6>
		   <p style=\"font-size:14px;\">$uses</p>
		 </div>
      
		 
		
		</div>
		
		  <div class=\"container\" style=\"background-color:#D1EEEE; margin-top:1em; border-radius:10px;\">
		<h6><i style=\"color:#FF7B89;\" class=\"fas fa-hand-holding-medical\"></i>Safety Advice</h6>
		    <p style=\"font-size:14px;\">$safety_advice</p>
		
		</div>
		
		  <div class=\"container\" style=\"background-color:#D1EEEE; margin-top:1em; border-radius:10px;\">
		<h6><i style=\"color:red;\" class=\"fas fa-exclamation-triangle\"></i>Side Effects</h6>
		    <p style=\"font-size:14px;\">$side_effects</p>
		
		</div>
		
				
         </tbody>
        </table>
      </div>

</div>


<div class=\"col-md-6\" style=\" margin-left:3em;\">

      
        <div class=\"container\" style=\"background-color:#088F8F; border-radius:10px; height:35px;\">
		<h5 style=\"color:white;\">Frequently Asked Questions(FAQs)</h5>
		</div>
		<div class=\"container\" style=\"background-color:#D1EEEE; margin-top:1em; border-radius:10px;\">
		<h6>Q: How foods influence the efficacy of medicines?</h6>
		<p>A: Food stimulates production of gastric acid. Stomach will produce acid to enhance food digestion. Certain medicines such as erythromycin, isoniazid and azithromycin will
		compromise when exposed to acidic condition. Acidic environment will cause the medicine to degrade. Consequently, medicine absorption will reduce and less medicine will
		be absorbed into body. As a result, the medicine will become less effective. Hence, such medicine should be taken during empty stomach. However, there are also medicines which 
		require acidic environment to optimize absorption such as ketoconazole and itraconazole. Such medicines should be taken after food.</p>
		</div>
		
		<div class=\"container\" style=\"background-color:#D1EEEE; margin-top:1em; border-radius:10px;\">
		<h6>Q: How to take the medicines?</h6>
		<p>A: Certain medicines can irritate the stomach. Thus, such medicines are suitable to be taken after food. 
		For example: acetylsalicylic acid, non-steroidal anti-inflammatory drugs (NSAIDs) such as diclofenac and ibuprofen and corticosteroid such 
		as prednisolone and dexamethasone.</p>
		</div>
		
		<div class=\"container\" style=\"background-color:#D1EEEE; margin-top:1em; border-radius:10px;\">
		<h6>Q: How to know whether the medicine should be taken before or after food?</h6>
		<p>A: Instruction on how to take medicine is usually printed in the product leaflet. If you are not supplied with such leaflet, you may obtain the information from pharmacists.<br>

          Consumption of medicine before or after food will influence the medicine bioavailability of the medicine in our body. 
		  Low bioavailability will reduce the effectiveness of the medicine. Hence, it is important to take the medicine in the right order.</p>
		</div>
      

</div>


</div>





<hr>

 </section>
 </form>";
 
 echo $med;
}
?>
	
 
