<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paypal Payment</title>
    <link rel="stylesheet" href="paypal.css">
</head>
<body>
    <main id="cart-main">
        <div class="site-title text-center">
            <h1 class="font-title">Shopping Cart</h1>
        </div>
        <div class="container">
            <div class="grid">
                <div class="col-1">
                    <div class="flex item justify-content-between">
                        <div class="flex">
                            <div class="img text-center">
                                <img src="./images/sanitize.jpg" alt="">
                            </div>
                            <div class="title">
                                <h3>Canon EOS 1500D</h3>
                                <span>Electronics</span>
                                <div class="buttons">
                                    <button type="submit"><i class="fas fa-chevron-up"></i> </button>
                                    <input type="text" class="font-title" value="1">
                                    <button type="submit"><i class="fas fa-chevron-down"></i> </button>
                                </div>
                                <a href="#">Save for later</a> |
                                <a href="#">Delete From Cart</a>
                            </div>
                        </div>
                        <div class="price">
                            <h4 class="text-red">$349</h4>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="subtotal text-center">
                        <h3>Price Details</h3>
                        <ul>
                            <li class="flex justify-content-between">
                                <label for="price">Products ( 3 items ) : </label>
                                <span>$399</span>
                            </li>
                            <li class="flex justify-content-between">
                                <label for="price">Delivery Charges : </label>
                                <span>Free</span>
                            </li>
                            <hr>
                            <li class="flex justify-content-between">
                                <label for="price">Amout Payble : </label>
                                <span class="text-red font-title">Rs.399</span>
                            </li>
      						<li class="flex-justify-content-between">	
                             <div id="paypal-payment-button">

                             </div>	
                              <a target="_blank" class="fcc-btn" href="pdf.php" style="background-color: #199319; color: white; padding: 15px 25px; text-decoration: none;">Download Bill PDF</a> 					 
						</li>
						</ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
	<script src="https://www.paypal.com/sdk/js?client-id=AYHCUrEAQyBvKqB-J-n0UsE54swei7-ryfCmfnbzJZ3zLupZ8RMuLlUEIcHcOgApSoDQJ3pnI_4FgmoF&disable-funding=credit,card"></script>
<script src="index.js"></script>
</body>
</html>