

   <input type="checkbox" class="hidden" id="nav-toggle">
<header class="navbar">
   <div class="container display-flex flex-align-center">
      <div class="flex-none">
        <div class="logo">
              <a href="index.php">
                 <img src="images/logo.png" width="200px" style="margin-top: 20px;">
               </a>
           </div>
      </div>
      <div class="flex-stretch"></div>
      <div class="flex-none nav-toggle">
         <label for="nav-toggle">&equiv;</label>
      </div>
      <nav class="flex-none nav flex">
         <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="product_list.php">SHOP</a></li>
            <li><a href="ourstory.php">OUR STORY</a></li>
            <!-- <li><a href="cafe.php">CAFÉ</a></li> -->
            <li><a href="product_cart.php">
               <span>CART</span>
               <span class="badge"><?= makeCartBadge() ?></span>
            </a></li>
         </ul>
      </nav>
   </div>
</header>