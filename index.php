<?php
   include "Cabezera.html";
?>
 
      <!--Seccion Principal-->
      <!--Primera-->
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="cupcakes-1850628_1920.jpg" class="d-block w-100" alt="slider1">
            
          </div>
          <div class="carousel-item">
            <img src="macarons-2179198_1920.jpg" class="d-block w-100" alt="slider2">
           
          </div>
          <div class="carousel-item">
            <img src="ice-cream-5928048_1920.jpg" class="d-block w-100" alt="slider3">
            
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

<?php
   include "footer.html";
?>   