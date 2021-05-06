<?php

include_once "lib/php/functions.php";	
include_once "parts/templates.php";	

$cart = getCartItems();


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<h2>My Cart</h2>
		<div class="grid gap">
			<div class="col-xs-12 col-md-8">
				<div class="card soft flat">

				<?php

		        if(!count($cart)) {
		        	echo "<h5>No Items In Your Cart Yet</h5>";
		        }
		        else {
		        	echo array_reduce($cart,'makeCartList');
		        }

		         ?>

				</div>
			</div>
			
<div class="col-xs-12 col-md-4">
            <div class="card soft flat">
               <div class="card-section display-flex">
                  <h2>Confirm Cart</h2>
               </div>
               <?= cartTotals() ?>
               <div class="card-section display-flex">
                  <a class="form-button" href="product_checkout.php">Checkout</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
</html>