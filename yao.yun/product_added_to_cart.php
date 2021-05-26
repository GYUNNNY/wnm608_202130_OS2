<?php

include "lib/php/functions.php";



$product = MYSQLIQuery("
	SELECT *
	FROM `products`
	WHERE `id` = {$_GET['id']}
    ")[0];
    $cart_product = cartItemById($product->id);

    //pretty_dump($product);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Added To Cart</title>

    <?php include "parts/meta.php" ?>
</head>
<body>

<?php include "parts/navbar.php" ?>

<div class="container">
    <div class="card soft">
               <?php
				if(!isset($_GET['id'])) {
					echo "You dun goofed";
					} else {
				?>
        <h2> You have added <?= $product->name ?> to your cart</h2>

  <div class="display-flex">
    <div class="flex-none"><button class="form-button"><a href="javascript:window.history.back();">Continue Shopping </a></button></div>
    <div class="flex-stretch"></div>
    <div class="flex-none"><button class="form-button"><a href="product_cart.php">Check Out</a></button></div>
  </div>
                <?
                    }
                ?>
    </div>
</div>

<div>
<?php include "parts/footer.php" ?>
</div>

</body>
</html>