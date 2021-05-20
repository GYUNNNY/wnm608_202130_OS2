
<?php 

 include "lib/php/functions.php"; 


 ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
  

   <?php include "parts/meta.php" ?>
   
</head>
<body>
      
   <?php include "parts/navbar.php" ?> 

 
   <div class="view-window"  style="background-image: url('images/cover2.jpg')">
     
      <div class="container">
         <h5 style="padding-top: 50px";>Free Shipping</h5>
         <h6 style="font-weight: 400;"> Make it easier than ever to enjoy <br>your favourite coffees at home.</h6>
         <button class="form-button bold"><a href="product_list.php">Shop Now</a></button>
       </div>
    
   </div>



   <div class="container">
   <div class="card">
      <h2 style="text-align: center;">Quality Coffee Beans Roasted Daily</h2>
      <h6 style="font-weight: 400; text-align: center;">We believe the coffee experience is our responsibility from seed to cup. Coffee is our<br> craft, our ritual, our passion. It is what drive and inspires us. With this simple truth and <br>responsibility we are bridging the gap from farm to street.</h6>
   </div>
   </div>
   

   <div class="imagebar">
     <div class="slider">
      <div class="slides">
         <input type="radio" name="radio-btn" id="radio1">
         <input type="radio" name="radio-btn" id="radio2">
         <input type="radio" name="radio-btn" id="radio3">
         <input type="radio" name="radio-btn" id="radio4">  

         <div class="slide first">
            <img src="images/shop5.jpg" alt="">
         </div>
         <div class="slide">
            <img src="images/shop4.jpg" alt="">
         </div>   
         <div class="slide">
            <img src="images/shop3.jpg" alt="">
         </div>   
         <div class="slide">
            <img src="images/shop8.jpg" alt="">
         </div>   

         <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
         </div>      
      </div>
       <div class="navigation-manual">
         <label for="radio1" class="manual-btn"></label>
         <label for="radio2" class="manual-btn"></label>
         <label for="radio3" class="manual-btn"></label>
         <label for="radio4" class="manual-btn"></label>
       </div>
     </div>
    </div>
<hr>

<div class="container">
    <div class="grid gap product-list">
         <div class="col-xs-12 col-md-6">
            <h1>New Releases</h1>
            <h6>Our Featured Products</h6>
             
      </div>
         <div class="col-xs-6 col-md-3">
            <a href="product_item.php?id=9">
       <figure class="product">
          <div class="product-image">
            <img src="images/product9.jpg" alt="">
          </div>
         <figcaption class="product-caption">
            
            <div class="product-title">Wilder Blend</div>
            <div class="product-description">RASPBERRY · FIG · REFRESHING</div>
            <div class="product-price">&dollar;18</div>
         </figcaption>
      </a>
       </figure>
         </div>
          
         <div class="col-xs-6 col-md-3">
            <a href="product_item.php?id=11">
            <figure class="product">
               <div class="product-image">
                 <img src="images/product11.jpg" alt="">
               </div>
              <figcaption class="product-caption">
                 
                 <div class="product-title">Starlight House Blend</div>

                 <div class="product-description">CHOCOLATE · BLUEBERRY PIE · VELVETY</div>
                 <div class="product-price">&dollar;19</div>
              </figcaption>
           </a>
            </figure>
              </div>
      </div>
</div>
<hr>

<!-- 
   <div class="container">
      <article id="article2" class="article card hard">
         <h2>Article 2</h2>
         <div class="article-body">
            <p>Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Dicta odio consequuntur, doloribus error minima veniam, eos perferendis explicabo esse illum dignissimos nesciunt sed, laudantium quidem aliquam et, possimus harum quisquam! Eum dicta, adipisci! Ratione nemo sed quo iusto unde atque?</p>
            <p>Voluptas numquam optio accusamus suscipit soluta enim cupiditate officia? Voluptatum odio autem vel ab perferendis debitis corrupti, neque fugiat sequi earum. Suscipit, deserunt. Labore nihil voluptas rerum, porro earum aliquam nisi dignissimos illum, tempora tempore quod ullam quis soluta totam.</p>
            <p>A fuga beatae voluptatem, totam non eum! Dicta facere eaque, necessitatibus reiciendis ducimus nihil velit neque repellat blanditiis perferendis assumenda deleniti laborum, magnam minima natus, excepturi quia quis magni, sapiente ut doloribus nostrum ipsam quos consequuntur autem. Beatae, illum, ducimus?</p>
            <p>Quisquam, consequatur. Repellendus doloribus, ullam aspernatur blanditiis, quam fuga earum sunt velit tempora inventore recusandae. Asperiores tenetur exercitationem ullam eveniet, eos ipsa doloremque, error, doloribus soluta hic aliquam tempora omnis sunt ipsam animi, qui commodi libero veritatis quis saepe aperiam.</p>
         </div>
      </article>
   </div> -->

 <!-- reviews start -->  
   <div class="container">
      <div>
         <h4 style="padding-top: 2em;">What our customers are saying...</h4>
      </div>
       <div class="grid gap product-list">

         <div class="col-xs-12 col-md-4">
           <div class="saying">   
                 <img src="images/staricon.png" width="17px">         
                  <span>"There's no better coffee on Earth than NVR. It's brought our home happiness and our friends enlightenment."</span>               
               <div class="product-caption">                  
                  <h6 style="text-align: center;">Ryan G.</h6>            
               </div>
           </div>
         </div>


         <div class="col-xs-12 col-md-4">
            <div class="saying">     
                 <img src="images/staricon.png" width="17px">      
                  <span>"I've been subscribed for two years and counting. Their coffee is phenomenal and unmatchable."</span>               
               <div class="product-caption">                  
                   <h6 style="text-align: center;">Gina W.</h6> 
                </div>
           </div>
         </div>

         <div class="col-xs-12 col-md-4">
            <div class="saying">    
                  <img src="images/staricon.png" width="17px">        
                  <span>"Your coffee is everything I expected. I can not go back to any other
                  coffees."</span>               
               <div class="product-caption">                  
                  <h6 style="text-align: center;">Huahua L.</h6>            
               </div>
            </div>
         </div>

      </div>
   </div>
   <!-- reviews end -->

   <div class="container" style="background-image: url(images/pattern.jpg);">
      <div class="card">
         
         <div class="saying" style="border: none; padding-top: 1em; padding-bottom: 2em;">
         <h2 style="text-align: center;">The Enthusiasm surrounding our coffee</h2>
         <span>Our goal is to make our coffee a memorable addition to any experience, and <br>to make the act of preparing and enjoying a cup of our coffee an experience in <br>and of itself.
         </span>
         </div>

 <div class="grid gap product-list">

         <div class="col-xs-12 col-md-4">
           <div class="">   
               <img src="images/theme1.jpg" style="width: 100%; height: 100%;">
                <div class="imgtext"> 
               <span>Freshness Guaranteed</span>
               </div>
           </div>
         </div>


         <div class="col-xs-12 col-md-4">
            <div class="">     
                 <img src="images/shop7.jpg" style="width: 100%; height: 100%;">
                 <div class="imgtext"> 
                 <span>We strive for the best</span>
                 </div>
           </div>
         </div>

         <div class="col-xs-12 col-md-4">
            <div class="">    
                  <img src="images/shop9.jpg" style="width: 100%; height: 100%;">
                  <div class="imgtext"> 
                  <span>In Season</span>
                  </div>
            </div>
         </div>
      </div>

     
         <div class="card" style="text-align: center;">
        <button class="form-button simple"><a href="ourstory.php">Our Story</a></button>
        </div>
  

      </div>
   </div>

<!-- footer start -->
   <?php include "parts/footer.php" ?>
   <!-- footer end -->
    <script>
      var counter = 1;
      setInterval(function(){
         document.getElementById('radio' + counter).checked = true;
         counter++;
         if(counter > 4){
            counter = 1;
         }

      }, 5000);
      
    </script>
</body>
</html>