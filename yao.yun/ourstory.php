
<?php

include "lib/php/functions.php";
include "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Story</title>
    <?php include "parts/meta.php" ?>
</head>
<body>
<?php include "parts/navbar.php" ?>


<div class="view-window" style="background-image: url('images/shop10.jpg');">	
		<div class="ourstory-top">
            <h3 style="padding-top: 4em;">Our Approach</h3>
        </div>    
</div>


<div class="container">
	<div class="ourstory">
	    <div class="card standard">
	    	<img src="images/staricon.png" style="width: 20px;">
	 	   <h4>We are NVR Coffee Roaster</h4>
	 	   <span>Starting from 2013, We embrace our responsibility to create positive change, We use extraordinary <br>coffee around the world. We challenge traditional beliefs to create economic opportunity. We are <br>stewards of the earth and advocates for our values of diversity, inclusion and equality.</span>
	    </div>
	 </div>
</div>



<div class="container">
  <div class="grid grid-justify-around">
    <div class="col-sm-12 col-md-6">
      <div class="room-description">
         <h1>Our Mission</h1>
       <p>NVR came to be through the serendipitous union of surf, sweat and a love of life and living. In 2013, founder Yun built and opened the first NVR cafe on 60 federal, San Francisco, California. Today, NVR has locations in cities from San Francisco to New York, but our roots remain planted in San Francisco, where we roast our coffee on vintage roasters and enjoy the endless surf of the rugged California coast.</p>
      </div>
    </div>

    <div class="col-sm-12 col-md-6">
       <div class="room-gallery">
        <img class="gallery-hightlight" src="images/shop1.jpg">
       
      </div>
    </div> 
  </div>
</div>


  <div class="hero-image">
    <!-- <img src="images/shop14.jpg"> --> 
        <div class="hero-text">
          <h6 style="font-size: 1em; text-align: center;">How to archive our goal?</h6>
          <h1 style="font-size: 2em; text-align: center;"> Design our product carefully</h1>
          <p>After it arrives from the farm, green coffee is transformed into something beautiful through a meticulous process of roasting, cupping, blending, brewing in our Coffeebars.</p>
        </div>
  </div>
  <hr>

<div class="container">
  <div class="grid grid-justify-around">

    <div class="col-sm-12 col-md-6">
      <img src="images/shop13.jpg" style="width: 80%;">
    </div>

    <div class="col-sm-12 col-md-6">
      <div class="room-description" style="padding-top: 7em;">
         <h1>Come enjoy a cup of coffee with us! </h1>
       
<div class="tabs">
    <ul>
        <li class="activem">Hour</li>
        <li>Location</li>
        <li>About</li>
    </ul>  
      <div id="contentm">
        <article>
          <div class="titlem">
          Mon-Wed: 7AM-6PM<br>
          Thu: Closed
        <br> Fri-Sat: 7AM-5PM </div>        
          
        </article>

        <article>
          <div class="titlem">190 New Montgomery St.
         <br>San Francisco, CA94101
         <br>(415) 500-0000</div>           
           
        </article>

        <article>
          <div class="titlem">Located in the heart of San Francisco,<br> We believe coffee is for everyone. We create a safe, welcoming environment on both sides of the counter.</div>   
           
        </article>
      </div>
  </div>

      </div>
    </div>
    
  </div>
</div>
<hr>

<script>
  
 $(document).ready(function() {
  $("article:first").show().siblings().hide();

  $("li").on("click", function() {

     let i = $(this).index();

     $("article").eq(i).show().siblings().hide();
      $(this).addClass("active").siblings().removeClass("active");
  });
 });
</script>


<!-- footer start -->
   <?php include "parts/footer.php" ?>
   <!-- footer end -->
</body>
</html>