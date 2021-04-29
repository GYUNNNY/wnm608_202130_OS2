<?php

include "lib/php/functions.php";
include "parts/templates.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>product list</title>

	<?php include "parts/meta.php" ?>
</head>
<body>
	<?php include "parts/navbar.php" ?>

	 <img src="" alt="">


	<div class="container">
		<div class="card">

			<h2>our coffee</h2>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, 
                    <br>eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
		</div>
	</div>

<div class="container">
	  <div id="product">

         <div class="grid gap product-list">

         <?php
         $products = MYSQLIQuery("
         SELECT * FROM `products`");

         echo array_reduce($products,'makeProductList');
        ?>
         </div>

      </div>
</div>


</body>
</html>
