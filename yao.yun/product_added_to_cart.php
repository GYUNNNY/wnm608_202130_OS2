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
        <h3> You have added <?= $product->name ?> to your cart</h3>

<div class="display-flex">
    <div class="flex-none"><a class="form-button" href="javascript:window.history.back();">Back To Product</a></div>
    <div class="flex-stretch"></div>
    <div class="flex-none"><a class="form-button" href="product_cart.php">Check Out</a></div>
</div>
                <?
                    }
                ?>
    </div>
</div>
</body>
</html>