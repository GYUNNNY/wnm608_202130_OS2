
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

   <div class="view-window"  style="background-image: url('images/c4.jpg')">
      <h2>PRODUCT</h2>
   </div>

   <div class="card">
      <h4>QUALITY COFFEE BEANS ROASTED DAILY</h4>
      <h6>WE BELIEVE THE COFFEE EXPERIENCE IS OUR RESPONSIBILITY FROM SEED TO CUP. COFFEE IS OUR CRAFT, OUR RITUAL, OUR PASSION. IT DRIVES US AND INSPIRES US. WITH THIS SIMPLE TRUTH AND RESPONSIBILITY WE ARE BRIDGING THE GAP FROM FARMLEVEL TO STREETLEVEL.</h6>
   </div>
   
   
  <!--  <figure class="product">
         <div class="product-image">
         
            <img src="images/theme1.jpg" width=50%>
         </div>
         <figcaption class="product-caption">
            
            <div class="product-title">On our SF location</div>
         </figcaption>
   </figure>    -->
   <div class="imagebar">
     <div class="slider">
      <div class="slides">
         <input type="radio" name="radio-btn" id="radio1">
         <input type="radio" name="radio-btn" id="radio2">
         <input type="radio" name="radio-btn" id="radio3">
         <input type="radio" name="radio-btn" id="radio4">  

         <div class="slide first">
            <img src="images/shop1.jpg" alt="">
         </div>
         <div class="slide">
            <img src="images/shop4.jpg" alt="">
         </div>   
         <div class="slide">
            <img src="images/shop3.jpg" alt="">
         </div>   
         <div class="slide">
            <img src="images/shop5.jpg" alt="">
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


   <div class="container">
      <article id="article1" class="article card soft">
         <h2>Article 1</h2>
         <div class="article-body">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At rem mollitia cupiditate consectetur dolorem, quaerat. Nihil sunt ullam harum ex id quam ipsum, amet molestiae. Molestias porro, cupiditate, nostrum, a aliquid, expedita alias hic voluptatem similique nihil sunt voluptatum magni!</p>
            <p>Soluta, nisi ipsam quas accusantium ducimus! Excepturi reprehenderit nulla, similique eligendi consequuntur beatae iste sint cumque corrupti explicabo sequi recusandae quae possimus quaerat, neque ut accusamus dolorem optio cum ullam! Facilis quaerat veritatis laborum, voluptatum a pariatur explicabo ea esse?</p>
            <p>Incidunt est, modi et! Totam ea odit nobis doloribus deleniti culpa veniam autem perferendis, recusandae sapiente a nam ullam officiis perspiciatis quod dignissimos, in, corrupti quas. Inventore consequatur, quaerat laboriosam quidem velit deleniti totam similique eveniet quisquam dolore maxime, ut!</p>
            <p>Esse quibusdam officia id, minima obcaecati soluta, expedita in repellendus ex maxime eius dignissimos illo, accusamus delectus unde quos! Quia est, animi iusto sequi qui corrupti molestias sunt expedita, obcaecati, possimus voluptates veniam! Placeat perferendis, ratione vel. Nam, natus optio?</p>
         </div>
      </article>
   </div>

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