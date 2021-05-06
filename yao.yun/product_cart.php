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

                if(!count($cart)){
	            echo "<h6>No Items in Your Cart</h6>";
                 }
                 else {
                  echo array_reduce($cart,'makeCartList');
                 }

                 ?>

				</div>
			</div>
			<!-- <div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Sub Total</strong></div>
						<div class="flex-none">&dollar;####</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Taxes</strong></div>
						<div class="flex-none">&dollar;####</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Total</strong></div>
						<div class="flex-none">&dollar;####</div>
					</div>
					<div class="card section display-flex">
						<a href="product_checkout.php" class="form-button">Checkout</a>    
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html> -->
<div class="col-xs-12 col-md-4">
            <div class="card soft flat">
               <div class="card-section display-flex">
                  <h2>Confirm Cart</h2>
               </div>
               <?= cartTotals() ?>
               <div class="card-section display-flex">
                  <a class="form-button" href="checkout.php">Checkout</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
</html>