
<?php

include "lib/php/functions.php";
include "parts/templates.php";
include "data/api.php";


$product = makeStatement("product_by_id")[0];


$thumbs = explode(",", $product->image_main);

$thumb_elements = array_reduce($thumbs,function($r,$o){
	return $r."<img src='$o'>";
});

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title>Product Item</title>
	<?php include "parts/meta.php" ?>

</head>
<body>
	<?php include "parts/navbar.php" ?>

	<div class="container">
	<div class="grid gap product-list">
		<div class="col-xs-12 col-md-6">
			<figure class="product">
				<div class="product-image">
					<?= $thumb_elements; ?>
				</div>
			</figure>
		</div>
		<div class="col-xs-12 col-md-1"></div>
		<div class="col-xs-12 col-md-5">
			<form class="card soft flat" action="product_actions.php?crud=add-to-cart" method="post">
				<input type="hidden" name="id" value="<?= $product->id ?>">
				<h5><?= $product->name ?></h5>
				<p><?= $product->description ?></p>
				<h5>&dollar;<?= $product->price ?></h5>
				
			<div class="card">
				<label class="form-label">quantity</label>
					<div class="form-select">
						<select name="amount">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
					</div>
					</div>
				<button type="submit" class="form-button" value="Add to Cart"> Add to Cart</button>
				<!-- <a type="button" class="form-button-white" value="Buy Now">Buy Now</a> -->
				<h5>Roasted and shipped daily</h5>
				
			</form>
		</div>
	</div>

<hr>
<div class="container" style="padding:5em"></div>

	<h2>Similar product</h2>
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
