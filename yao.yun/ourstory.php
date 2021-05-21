
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
            <h3 style="padding-top: 4em;">Our Story</h3>
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
	<div class="ourstory">
	    <section>
      <div class="room-description">
        <h1>Our Mission</h1>
       <p>NVR came to be through the serendipitous union of surf, sweat and a love of life and living. In 2013, founder Yun built and opened the first NVR cafe on 60 federal, San Francisco, California. Today, NVR has locations in cities from San Francisco to New York, but our roots remain planted in San Francisco, where we roast our coffee on vintage roasters and enjoy the endless surf of the rugged California coast.</p>
      </div>

      
      <div class="room-gallery">
        <img class="gallery-hightlight" src="images/c4.jpg" alt="room1" />
        <div class="room-preview">
          <img src="images/shop14.jpg" class="room-active" alt="" />
          <img src="images/c4.jpg" alt="" />
          <img src="images/shop11.jpg" alt="" />
        </div>
      </div>
</section>
    
	<script>
		function imageGallery() {
  const highlight = document.querySelector(".gallery-hightlight");
  const previews = document.querySelectorAll(".room-preview img");

  previews.forEach(preview => {
    preview.addEventListener("click", function() {
      const smallSrc = this.src;
      const bigSrc = smallSrc.replace("small", "big");
      previews.forEach(preview => preview.classList.remove("room-active"));
      highlight.src = bigSrc;
      preview.classList.add("room-active");
    });
  });
}

imageGallery();
	</script>
	 </div>
</div>


<!-- footer start -->
   <?php include "parts/footer.php" ?>
   <!-- footer end -->
</body>
</html>