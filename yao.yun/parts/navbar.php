   <header class="navbar">
        <div class="container display-flex flex-aligh-center">
           <div class="logo flex-none">
              <a href="index.php">
                 <img src="images/logo.png" width="200px">
               </a>
           </div>

      <div class="flex-stretch"></div>
      <div class="flex-none">
      <nav class="nav flex-none">
              <ul class="display-flex">
                 <li><a href="product_list.php">SHOP</a></li> 
                 <li><a href="ourstory.php">OUR STORY</a></li>
                 <li><a href="cafe.php">CAFÉ</a></li>
                 <li><a href="product_cart.php">
                    <span>CART</span>
                 <span class="badge"><?= makeCartBadge() ?></span>
                 </a></li>
                 
              </ul>
              
           </nav>
       <script>makeNav("nav flex")</script>
         
      </div>
           
        </div>
   </header>