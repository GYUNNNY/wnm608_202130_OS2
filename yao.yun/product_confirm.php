<?php

include "lib/php/functions.php";

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Confirmation</title>
   
   <?php include "parts/meta.php" ?>
</head>
<body>
   <?php include "parts/navbar.php" ?>
   

   <div class="container">
      <div class="card soft">
         <h2>Thank you for your purchase!</h2>

         <h5>You will receive a confirmation email shortly</h5>
         <button class="form-button"><a href="product_list.php">Continue Shopping</a></button>
      </div>
   </div>

   <?php
   resetCart();
   ?>
</body>
</html>