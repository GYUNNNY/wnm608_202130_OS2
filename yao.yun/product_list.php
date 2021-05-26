<?php
include "lib/php/functions.php";
include "parts/templates.php";
include "data/api.php";

// pretty_dump([$_GET,$_POST]);

setDefault('s',''); // search
setDefault('t','products_all'); // type
setDefault('d','DESC'); // order direction
setDefault('o','date_create'); // order by
setDefault('l','12'); // limit

// pretty_dump($_GET);

function makeSortOptions() {
   $options = [
      ["date_create","DESC","Latest Products"],
      ["date_create","ASC","Oldest Products"],
      ["price","DESC","Highest Price"],
      ["price","ASC","Lowest Price"]
   ];
   foreach($options as [$orderby,$direction,$name]) {
      echo "
      <option data-orderby='$orderby' data-direction='$direction'
      ".($_GET['o']==$orderby && $_GET['d']==$direction ? "selected" : "").">
      $name</option>
      ";
   }
}

if(isset($_GET['t'])) {
   $result = makeStatement($_GET['t']);
   $products = isset($result['error']) ? [] : $result;
} else {
   $result = makeStatement("products_all");
   $products = isset($result['error']) ? [] : $result;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>product list</title>
	<?php include "parts/meta.php" ?>
</head>
<body>
	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card">

			<h2> Shop Our coffee</h2>
				<h6 style="font-weight: 400;">Our coffee is thoughtfully sourced and roasted to order.</h6>
		</div>
	</div>


<div class="container">   
   <div class="grid gap">
	 <div class="col-xs-12 col-md-8">
     <form action="product_list.php" method="get" class="hotdog" style="margin-top:2em">
         <input type="hidden" name="t" value="search">
         <input type="hidden" name="d" value="<?=$_GET['d']?>">
         <input type="hidden" name="o" value="<?=$_GET['o']?>">
         <input type="hidden" name="l" value="<?=$_GET['l']?>">
         <input type="search" name="s" placeholder="Search" value="<?= $_GET['s'] ?>">
      </form>
    </div>

     <div class="col-xs-12 col-md-4">
      <form action="product_list.php" method="get" style="margin-top:2em; font-size: 1em">
         <input type="hidden" name="t" value="search">
         <input type="hidden" name="s" value="<?=$_GET['s']?>">
         <input type="hidden" name="d" value="<?=$_GET['d']?>">
         <input type="hidden" name="o" value="<?=$_GET['o']?>">
         <input type="hidden" name="l" value="<?=$_GET['l']?>">
         <div class="form-select">
            <select onChange="checkSort(this)">
               <? makeSortOptions() ?>
            </select>
         </div>
      </form>
   </div>

</div>
     
   </div>
<hr>


<div class="container">
	  <div id="product">

         <div class="grid gap product-list">
         <?php

				

            if(empty($products)) {
            echo "No products found";
             } else {
              echo array_reduce($products,'makeProductList');
             }

            // pretty_dump($products);

         ?>
         </div>

      </div>
 </div>
 <div class="container">
    <div class="card">
       <a href="admin/index.php">product admin</a>
    </div>
 </div>

 <?php include "parts/footer.php" ?>
 

</body>
</html>