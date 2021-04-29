<?php

include "lib/php/functions.php";
include "parts/templates.php";
$product = MYSQLIQuery("
	SELECT *
	FROM `products`
	WHERE `id` = {$_GET['id']}
	")[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Story</title>
    <?php include "parts/meta.php" ?>
</head>
<body>
<?php include "parts/navbar.php" ?>
<div class="container">
    <div class="card soft">
        <h3> You have added <?= $product->name ?> to your cart</h3>
<div class="display-flex">
    <div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>
    <div class="flex-stretch"></div>
    <div class="flex-none"><a href="product_cart.php">Check Out</a></div>
</div>
    </div>
</div>
</body>
</html>