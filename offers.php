<?php
function offer()
{
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #F0F8FF;
   border: 3px solid #BEBEBE;
  
}
</style>
</head>
<body>
<hr>
<h5>All Offers</h5>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="./images/icici.jpg" style="height:50px;"/>
      <p>Get Flat 20% discount on ICICI account</p>
       <a href="https://www.icicibank.com/Personal-Banking/offers/offer-index.page">CODE:62FL</a>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="./images/phonepe.jpg" style="height:50px;"/>
      <p>Get Upto 100% cashback via PhonePe wallet only!</p>
      <a href="https://www.phonepe.com/">CODE:56FC</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="./images/amazon.jpg" style="height:50px;"/>
      <p>Get upto Rs.650 cashback on amazon pay</p>
      <a href="https://www.amazon.in/?ext_vrnc=hi&tag=googinkenshoo-21&ascsubtag=_k_Cj0KCQjwtMCKBhDAARIsAG-2Eu_yV8P8O7NltL5uOBz7dSYdFAHlJrZE3XE2eCaDBpQpFXbZvvAY7TQaAsg0EALw_wcB_k_&gclid=Cj0KCQjwtMCKBhDAARIsAG-2Eu_yV8P8O7NltL5uOBz7dSYdFAHlJrZE3XE2eCaDBpQpFXbZvvAY7TQaAsg0EALw_wcB">CODE:5FIT</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="./images/cashback.jpg" style="height:50px;"/>
      <p>Get upto 500Rs cashback on paytm</p>
      <a href="">CODE:998J</a>
    </div>
  </div>
</div>
<hr>
<br>
<br>
<h4>Get 3-Step Quality-checked Medicines</h4>
<p>

MediPlus is a one-stop-shop for all your healthcare needs. We have 1L+ products for you to choose from. Buy medicines online at affordable prices from the comforts of your home in just a few clicks and get them delivered at your doorstep.

The entire process of shopping for medicines is hassle-free and convenient. All you have to do is search for the products you need on our website or app, add to cart and then proceed with the checkout process.

With our scheduled refill reminder, you don’t even need to keep track of your refill dates.

What’s more, we have great offers, with added discounts and massive e-wallet cashbacks on purchasing medicines!
</p>
</body>
</html>
<?php
     }

?>


