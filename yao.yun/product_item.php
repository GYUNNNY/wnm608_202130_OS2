<?php

include "lib/php/functions.php";
include "parts/templates.php";

$product = MYSQLIQuery("
	SELECT *
	FROM `products`
	WHERE `id` = {$_GET['id']}
	")[0];
$thumbs = explode(",", $product->image_main);
$thumb_elements = array_reduce($thumbs,function($r,$o){
	return $r."<img src='$o'>";
});

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Productitem</title>
	<?php include "parts/meta.php" ?>

</head>
<body>
	<?php include "parts/navbar.php" ?>

<div class="container">
	<div class="grid gap">
		<div class="col-xs-12 col-md-7">
			<figure class="product">
				<div class="product-image">
					<?= $thumb_elements; ?> 		
			</div>
			</figure>
	</div>
		<div class="col-xs-12 col-md-1"></div>
		<div class="col-xs-12 col-md-5">
			<h5><?= $product->name ?></h5>
			<p><?= $product->description ?></p>
			<h5>&dollar;<?= $product->price ?></h5>
			
			<p>Quantity</p>
			<input class="hotdog" type="number" placeholder="1" min="1">
			<br>
			<a href="product_added_to_cart.php?id=<?= $product->id ?>" type="button" class="form-button" value="Add to Cart"> Add to Cart</a>
	
			<h6>Roasted and shipped daily</h6>
		
		</div>
	</div>

<br>
<hr>
<br>

	<h2>Similar profile</h2>
		<div class="container">

			<div class="grid gap product-list">
			<?php

			$products = MYSQLIQuery("
				SELECT *
				FROM `products`
				ORDER BY `date_create`
				LIMIT 4
				");

			echo array_reduce($products,'makeProductList');

			?>
		
		</div>

</body>
</html>	
