<?php

function makeProductList($r,$o) {
return $r.<<<HTML
<div class="col-xs-12 col-sm-6 col-md-4">
   <a href="product_item.php?id=$o->id" class="product">
      <div class="product-image">
         <img src="$o->image_main" alt="">
      </div>
      <figcaption class="product-caption">
		   <div class="product-title">$o->name</div>
         <div class="product-price">&dollar;$o->price</div>
         
      </figcaption>
   </a>
</div>
HTML;
}

function selectAmount($amount=1,$total=10) {
	$output = "<select name= 'amount'>";
	for($i=1;$i<$total;$i++){
		$output .= "<option ".($i==$amount?'selected':'').">$i</option>";
	}
	$output .= "</select>";
	return $output;
}

function makeCartList($r,$o) {
   $totalfixed	= number_format($o->total,2,'.','');
   $amountselect = selectAmount($o->amount,10);
   
      return $r.<<<HTML
      <div class="display-flex cart-product">
         <div class="flex-none image-thumbs">
            <img src="$o->image_thumb">
         </div>
         <div class="flex-stretch">
            <h6>$o->name</h6>
            <form action="product_actions.php?crud=delete-cart-item" method="post">
               <input type="hidden" name="id" value="$o->id">
               <input class="form-button-white" type="submit" value="delete">
            </form>
         </div>
         <div class="flex-none">
            <h6>&dollar;$totalfixed</h6>
            <form action="product_actions.php?crud=update-cart-item" method="post" onchange="this.submit()">
               <input type="hidden" name="id" value="$o->id">
               <div class=" form-select">
                  $amountselect
               </div>
            </form>
         </div>
      </div>
      HTML;
   }


   function makeCondensedCartList($r,$o) {
      $totalfixed = number_format($o->total,2,'.','');
      $amountselect = selectAmount($o->amount,10);
      return $r.<<<HTML
      <div class="display-flex card-section">

         <div class="flex-stretch">
            <strong>$o->name</strong>
         </div>
         <div class="flex-none">
            <div>&dollar;$totalfixed</div>
         </div>
      </div>
      HTML;
      }

   function cartTotals() {
      $cart = getCartItems();
      
      $cartprice = array_reduce($cart,function($r,$o){return $r+$o->total;},0);
      
      $pricefixed = number_format($cartprice,2,".","");
      $tax = number_format($cartprice*0.0275,2,".","");
      $taxed = number_format($cartprice*1.0275,2,".","");
      
      return <<<HTML
         <div class="display-flex cart-section">
            <div class="flex-stretch">
               <h6>Sub Total</h6>
            </div>
            <div class="flex-none">
               <h6>&dollar;$pricefixed</h6>
            </div>
         </div>
         <div class="display-flex cart-section">
            <div class="flex-stretch">
               <h6>Taxes</h6>
            </div>
            <div class="flex-none">
               <h6>&dollar;$tax</h6>
            </div>
         </div>
         <div class="display-flex cart-section">	
            <div class="flex-stretch">
               <h6>Total</h6>
            </div>
            <div class="flex-none">
               <h6>&dollar;$taxed</h6>
            </div>
         </div>
    HTML;  
   }