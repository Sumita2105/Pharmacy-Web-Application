<?php

    session_start();
    include('connection.php');
    include('demo1.php'); 
    if(isset($_POST['add']))
    {
     if(isset($_SESSION['cart']))
     {
             $item_array_id= array_column($_SESSION['cart'],"pid");

               if(in_array($_POST['pid'],$item_array_id))
               {
                  echo '<script>alert("Product already added in the cart!!")</script>';
                  echo '<script>window.location="Home.php"</script>';
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

?>

<html>
<head>
    <title>Shopping cart</title>


<!--css-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<!--Font Awesome-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">


<!--External css-->
<link rel="stylesheet" href="demo.css">
</head>
<body>

<?php
include('header.php');
?>

<div class="container">
    <div class="row text-center py-5">
     <?php
        $result = getData();
        while($row=mysqli_fetch_assoc($result))
        {
            component($row['pname'], $row['pprice'], $row['pimage'], $row['pdesc'], $row['pid'], $row['p_orgprice'], $row['manufacturer'], $row['shipping']);
        }
     ?> 
</div>
</div>

<!--Javascript files-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</body>
</html>